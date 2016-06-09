<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ctpo extends CI_Controller
{
    public function index()
    {
        $this->load->view('tpo/dashboard');
    }
}
?>