<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cstudent extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
		$this->load->model('mstudent');
        $this->load->model(array('sitemodel'));
        $this->load->library('form_validation');
        $this->load->library('session');
		 if (!$this->session->userdata('logged_in')) 
		 {
		 	redirect(base_url());
		 } 
		//print_r($this->session->userdata('logged_in'));
		$uid=$this->session->userdata('logged_in')['uname'];
    }
	public function temp()
	{
	}
	public function process()
	{
	
		$data['nrecords']=$this->mstudent->news();
		$uid=$this->session->userdata('logged_in')['uname'];
		$data['profiledata']=$this->mstudent->getprofile($uid);
		$this->load->view('student/header');
		$this->load->view('student/process',$data);
	}
    public function index()
    {
        $data['records']=$this->mstudent->drive();
		$data['profile']=array('harsh.jpg','harsh');
		$data['nrecords']=$this->mstudent->news();
		$uid=$this->session->userdata('logged_in')['uname'];
		$data['profiledata']=$this->mstudent->getprofile($uid);
		$this->load->view('student/header');
		$this->load->view('student/dashboard',$data);
    }
	public function result()
    {
		$data['nrecords']=$this->mstudent->news();
		$uid=$this->session->userdata('logged_in')['uname'];
		$data['profiledata']=$this->mstudent->getprofile($uid);
        $this->load->view('student/header');
		$this->load->view('student/result',$data);
    }
	public function event()
    {
			$data['records']=$this->mstudent->mevent();
			$data['nrecords']=$this->mstudent->news();
			$uid=$this->session->userdata('logged_in')['uname'];
			$data['profiledata']=$this->mstudent->getprofile($uid);
			$this->load->view('student/header');
			$this->load->view('student/event',$data);
    }
	public function profile()
    {
		$data['nrecords']=$this->mstudent->news();
		$uid=$this->session->userdata('logged_in')['uname'];
		$data['profiledata']=$this->mstudent->getprofile($uid);
        $this->load->view('student/header');
		$this->load->view('student/profile',$data);
    }
	public function wizad()
    {
		$this->load->view('student/sregister.php');
    }
	public function news($id)
	{
		$data['nrec']=$this->mstudent->fullnews($id);
		$this->load->view('student/newspage',$data);
	}
	public function drive($id)
	{
			$data['records']=$this->mstudent->fulldrive($id);
			$this->load->view('student/drive',$data);			
	}
	public function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect(base_url());
    }
	public function applyclient()
	{
		$submit = $this->input->post('dsubmit');
        if (isset($submit))
        {
            $cid=$this->input->post('cid');
			$sid=1;
			$atest=0;
			$tech=0;
			$gd=0;
			$pi=0;
			$fsp=$this->input->post('sprocess');
			if (strpos($fsp,'Aptitude Test') == false) 
			{
    			$atest=1;
			}
			if (strpos($fsp,'Group Dicusstion') != false) 
			{
    			$gd=1;
			}
			if (strpos($fsp,'Personal interview') != false) 
			{
    			$pi=1;
			}
			if (strpos($fsp,'Technical') != false) 
			{
    			$tech=1;
			}
			$drive_part['cid']=$cid;
			$drive_part['sid']=$sid;
			$drive_part['atest']=$atest;
			$drive_part['tech']=$tech;
			$drive_part['gd']=$gd;
			$drive_part['pi']=$pi;
			$this->mstudent->drivepart($drive_part);
			redirect('cstudent/index');
		}
	} 
	
}
?>