<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ccompany extends CI_Controller
{
    public function index()
    {
		$this->load->view('company/header');
		$this->load->view('company/dashboard');
		$this->load->view('company/footer');
   	} 
	public function editprofile()
	{
		$this->load->view('company/header');
		$this->load->view('company/vcdetailform');
		$this->load->view('company/footer');
	}
	public function adddrive()
	{
		$this->load->view('company/header');
		$this->load->view('company/adddriveform');
		$this->load->view('company/footer');
	}
}
?>