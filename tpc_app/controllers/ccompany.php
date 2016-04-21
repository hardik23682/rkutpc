<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ccompany extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('mcompany'));
		$this->load->library('form_validation');
		$this->load->library('session');
	}

    public function index()
	{
		$email=$this->session->flashdata('email');
		$res=$this->mcompany->getdata($email);

		if(!empty($res['esyr']))
			$this->home();
		else
			$this->profile();
   	}

	public function home()
	{
		$this->load->view('company/header');
		$this->load->view('company/dashboard');
		$this->load->view('company/footer');
	}

	public function upload()
	{
		$config['upload_path'] = dirname($_SERVER["SCRIPT_FILENAME"]).base_url()."/tcp_asset/cmp_prof/";
		$config['upload_url']  = base_url()."/tcp_asset/cmp_prof/";
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']    = '100';
		$config['overwrite']=true;
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('logo'))
		{
			$this->form_validation->set_message('upload', '%s is required please select it');
			return false;
		}
		else
		{
			$image_data = $this->upload->data();
			$filename = $image_data['file_name'];
			return true;
		}
	}

	public function profile()
	{
		$email=$this->session->flashdata('email');
		$res=$this->mcompany->getdata($email);

		$submit = $this->input->post('submit');
		if (isset($submit)) {
			$config = array(
				array(
					'field' => 'name',
					'label' => 'Company Name',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide a %s'
					)
				),
				array(
					'field' => 'city',
					'label' => 'City',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide a %s'
					)
				),
				array(
					'field' => 'email',
					'label' => 'Email',
					'rules' => 'required|valid_email',
					'errors' => array(
						'required' => 'You must provide a %s',
						'valid_email' => 'You must provide a valid %s'
					)
				),
				array(
					'field' => 'website',
					'label' => 'Website',
					'rules' => 'required|valid_url',
					'errors' => array(
						'required' => 'You must provide a %s',
						'valid_url' => 'You must provide a valid %s'
					)
				),
				array(
					'field' => 'domain',
					'label' => 'Domain',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide %s',
					)
				),
				array(
					'field' => 'detail',
					'label' => 'Detais About Company',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide %s',
					)
				),
				array(
					'field' => 'esyear',
					'label' => 'Establish Year',
					'rules' => 'required|numeric',
					'errors' => array(
						'required' => 'You must provide %s',
						'numeric' => '%s must be numeric'
					)
				),
				array(
					'field' => 'domain',
					'label' => 'Domain',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide %s',
					)
				),
				array(
					'field' => 'cpname',
					'label' => 'Contact Person',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide %s',
					)
				),
				array(
					'field' => 'desg',
					'label' => 'Designation',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide %s',
					)
				),
				array(
					'field' => 'con1',
					'label' => 'Contact Number 1',
					'rules' => 'required|numeric',
					'errors' => array(
						'required' => 'You must provide %s',
						'numeric'=>'%s must be number'
					)
				),
				array(
					'field' => 'logo',
					'label' => 'Company Logo',
					'rules' => 'callback_upload'
				)
			);

			$this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');
			$this->form_validation->set_rules($config);

			if ($this->form_validation->run() == true)
			{
				$name='';
				$city='';
				$email='';
				$website='';
				$domain='';
				$detail='';
				$esyear='';
				$cpname='';
				$desg='';
				$con1='';
				$con2='';

				extract($_POST);

				$data=array(
					'name'=>$name,
					'city'=>$city,
					'email'=>$email,
					'website'=>$website,
					'domain'=>$domain,
					'detail'=>$detail,
					'esyr'=>$esyear,
					'cpname'=>$cpname,
					'desg'=>$desg,
					'con1'=>$con1,
					'con2'=>$con2
				);

				$submit = $this->input->post('submit');
				if (isset($submit)) {
					$s = $this->mcompany->update_profile($data);
					if($s>0)
					{
						$success = "Your profile is updated successfully";
						$data['success'] = $success;
						$data['reset']=true;
						$this->load->view('company/header');
						$this->load->view('company/dashboard', $data);
						$this->load->view('company/footer');
					}

				}
			}
			else
			{
				$error = validation_errors();
				$data['error'] = $error;
				$this->load->view('company/header');
				$this->load->view('company/vcdetailform', $data);
				$this->load->view('company/footer');
			}
		}
		else
		{
			$this->load->view('company/header');
			$this->load->view('company/vcdetailform',$res);
			$this->load->view('company/footer');
		}
	}

	public function addDrive()
	{
		$submit = $this->input->post('submit');
		if (isset($submit)) {
			$config = array(
				array(
					'field' => 'jtitle',
					'label' => 'Job title',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide a %s'
					)
				),
				array(
					'field' => 'jdetail',
					'label' => 'Job Detail',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide %s',
					)
				),
				array(
					'field' => 'jlocation',
					'label' => 'Job Location',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide %s',
					)
				),
				array(
					'field' => 'skrd',
					'label' => 'Required Skill',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide %s'
					)
				),
				array(
					'field' => 'eligible',
					'label' => 'Eligible Courses',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide %s',
					)
				),
				array(
					'field' => 'pos',
					'label' => 'Position',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide %s',
					)
				),
				array(
					'field' => 'ctc',
					'label' => 'CTC',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide %s',
					)
				),
				array(
					'field' => 'yr[]',
					'label' => 'Eligible Year',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must select atleast one %s',
					)
				),
				array(
					'field' => 'br[]',
					'label' => 'Eligible Branch',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must select atleast one %s',
					)
				),
				array(
					'field' => 'bddetails',
					'label' => 'Bond Details',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide %s',
					)
				),
				array(
					'field' => 'lrdate',
					'label' => 'Last Registration Date',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide %s',
					)
				),
				array(
					'field' => 'jdate',
					'label' => 'Joining Date',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide %s',
					)
				),
				array(
					'field' => 'ddate',
					'label' => 'Drive Date',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide %s',
					)
				),
				array(
					'field' => 'sp[]',
					'label' => 'Selection Process',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must select atleast one %s',
					)
				),
				array(
					'field' => 'cperson',
					'label' => 'Contact Person',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide %s',
					)
				),
				array(
					'field' => 'mno',
					'label' => 'Mobile Number',
					'rules' => 'required|numeric',
					'errors' => array(
						'required' => 'You must provide %s',
						'numeric'=>'%s must be numeric'
					)
				),
				array(
					'field' => 'email',
					'label' => 'Email',
					'rules' => 'required|valid_email',
					'errors' => array(
						'required' => 'You must provide %s',
						'valid_email'=> '%s must be valid'
					)
				)
			);

			$this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');
			$this->form_validation->set_rules($config);

			if ($this->form_validation->run() == true)
			{
			}
			else
			{
				$error = validation_errors();
			}
			$data['error'] = $error;
			$this->load->view('company/header');
			$this->load->view('company/adddriveform', $data);
			$this->load->view('company/footer');
		}
		else
		{
			$this->load->view('company/header');
			$this->load->view('company/adddriveform');
			$this->load->view('company/footer');
		}
	}
}
?>