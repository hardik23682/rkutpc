<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ccompany extends CI_Controller
{
    public function index()
    {
		$this->load->view('company/header');
		$this->load->view('company/dashboard');
		$this->load->view('company/footer');
   	} 
	public function addDrive()
	{
		$this->load->view('company/header');
        $this->load->view('company/addDrive');
		$this->load->view('company/footer');
	}
}
?>