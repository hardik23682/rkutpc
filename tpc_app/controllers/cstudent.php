<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cstudent extends CI_Controller
{
    public function index()
    {
        $this->load->view('student/header');
		$this->load->view('student/dashboard');
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
}
?>