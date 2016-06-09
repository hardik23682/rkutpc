<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ccompany extends CI_Controller
{
	public $cid='';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mcompany');
		$this->load->library('form_validation');
		$this->load->library('session');
		if (!$this->session->userdata('cid')) 
		 {
		 	redirect(base_url());
		 } 
			 
	}
	public function logout()
    {
        $this->session->unset_userdata('cid');
        session_destroy();
        redirect(base_url());
    }
    public function index()
	{
		$cid=$this->session->userdata('cid');
		$res=$this->mcompany->getdata($cid);
		if(!empty($res['esyear']))
			$this->home();
		else
			$this->profile();
   	}

	public function home()
	{
		$data['records']=$this->mcompany->drive();
		$this->load->view('company/header');
		$this->load->view('company/dashboard',$data);
		$this->load->view('company/footer');
	}
	public function profile()
	{
		$cid=$this->session->userdata('cid');
		$res=$this->mcompany->getdata($cid);
		$submit = $this->input->post('submit');
		if (isset($submit))
		 {
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
					'field' => 'con2',
					'label' => 'Contact Number 2',
					'rules' => 'numeric',
					'errors' => array(
						'numeric'=>'%s must be number'
					)
				),
			);

			$this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');
			$this->form_validation->set_rules($config);

			$config['upload_path']          = './tpc_asset/company';
			$config['allowed_types']        = 'gif|jpg|png';

			$this->load->library('upload', $config);

			if ($this->form_validation->run() == true && $this->upload->do_upload('logo'))
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

				$idata=$this->upload->data();
				$data['prof_pic'] = base_url("tpc_asset/company/prof/" . $idata['raw_name'] . $idata['file_ext']);

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
				$data['upload_error'] = $this->upload->display_errors();

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
	public function process()
	{
		$this->load->view('company/header');
		$this->load->view('company/process');
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
				),
				array(
					'field' => 'venue',
					'label' => 'Drive Venue',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide %s'
					)
				),
				array(
					'field' => 'dtype',
					'label' => 'Drive type',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide %s'
					)
				)
			);

			$this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');
			$this->form_validation->set_rules($config);

			$config['upload_path']          = './tpc_asset/company/attachments';
			$config['allowed_types']        = 'gif|jpg|png';

			$this->load->library('upload', $config);

			if ($this->form_validation->run() == true && $this->upload->do_upload('attachment'))
			{
				$jtitle = '';
				$jdetail = '';
				$jlocation = '';
				$skrd = '';
				$eligible = '';
				$pos = '';
				$ctc = '';
				$yr = array();
				$br = array();
				$bddetails = '';
				$lrdate = '';
				$jdate = '';
				$ddate = '';
				$sp = array();
				$cperson = '';
				$mno = '';
				$email = '';
				$otherinfo = '';
				$dtype='';
				$venue='';


				extract($_POST);

				$data = array(
					'jtitle' => $jtitle,
					'jdetail' => $jdetail,
					'jlocation' => $jlocation,
					'skrd' => $skrd,
					'eligible' => $eligible,
					'pos' => $pos,
					'ctc' => $ctc,
					'yr' => implode(",",$yr),
					'br' => implode(",",$br),
					'bddetails' => $bddetails,
					'lrdate' => $lrdate,
					'jdate' => $jdate,
					'ddate' => $ddate,
					'sp' => implode(",",$sp),
					'cperson' => $cperson,
					'mno' => $mno,
					'email' => $email,
					'otherinfo' => $otherinfo,
					'dtype'=>$dtype,
					'company_id'=>$this->session->userdata('cid'),
					'venue'=>$venue
				);
				$idata=$this->upload->data();
				$data['attachment'] = base_url("tpc_asset/company/attachments/" . $idata['raw_name'] . $idata['file_ext']);
				$submit = $this->input->post('submit');
				if (isset($submit))
				{
					$s = $this->mcompany->addDrive($data);
					if ($s > 0)
					{
						$success = "Your Drive is successfully added, Please wait for TPO approval";
						$data['success'] = $success;
						$data['reset'] = true;
						$this->load->view('company/header');
						$this->load->view('company/dashboard', $data);
						$this->load->view('company/footer');
					}
				}
			}
			else
			{
				$upload_error = $this->upload->display_errors();
				$this->load->view('company/header');
				$this->load->view('company/adddriveform', compact('upload_error'));
				$this->load->view('company/footer');
			}
		}
		else
		{
			$this->load->view('company/header');
			$this->load->view('company/adddriveform');
			$this->load->view('company/footer');
		}
   	}
	public function wlist($id)
	{
			$this->load->model('mcompany');
			
			$data['records']=$this->mcompany->wlist($id);
			$this->load->view('company/wlistpg',$data);
			
	}
	public function editprofile()
	{
		$this->load->view('company/header');
		$this->load->view('company/vcdetailform');
		$this->load->view('company/footer');
	}	
	public function drive($id)
	{
			$this->load->model('mcompany');
			$data['records']=$this->mcompany->fullstud($id);
			$this->load->view('company/studentinfo',$data);
			
	}
}
?>