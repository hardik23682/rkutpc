<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cstudent extends CI_Controller
{public function __construct()
    {
        parent::__construct();
        $this->load->model(array('sitemodel'));
        $this->load->library('form_validation');
        $this->load->library('session');
		 if (!$this->session->userdata('logged_in')) 
		 {
		 	redirect(base_url());
		 }
		 
    }

    public function index()
    {
        $this->load->model('mstudent');
        $data['records']=$this->mstudent->drive();
		/*foreach($data['records'] as $row)
		{
		echo $row->job_details;
		echo "<br>";
		}*/
        $this->load->view('student/header');
		$this->load->view('student/dashboard',$data);

    }
	public function result()
    {
        $this->load->view('student/header');
		$this->load->view('student/result');
    }
	public function event()
    {
        $this->load->view('student/header');
		$this->load->view('student/event');
    }
	public function profile()
    {
        $this->load->view('student/header');
		$this->load->view('student/profile');
    }
	public function wizad()
    {
		$this->load->view('student/sregister.php');
    }
	public function drive($id)
	{
			$this->load->model('mstudent');
		 	//$data['records']=
			$data['records']=$this->mstudent->fulldrive($id);
			$this->load->view('student/drive',$data);
			//echo $id;
			//print_r($data);
			
	}
	function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect(base_url());
    }
}
?>