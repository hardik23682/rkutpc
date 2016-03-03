<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class student extends CI_Controller
{
    public function index()
    {
        $this->load->view('student/dashboard.php');
    }
}
?>