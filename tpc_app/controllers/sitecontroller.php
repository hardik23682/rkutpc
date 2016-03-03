<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SiteController extends CI_Controller
{

    public function index()
    {
        $this->load->template('vhome');
    }

    //this function will load comapny form in modal popup
    public function cform()
    {
        $this->load->view('vcregister.php');
    }

    //this function will load student form in modal popup
    public function sform()
    {
        $this->load->view('vsregister.php');
    }

    //this function will load institute form in modal popup
    public function iform()
    {
        $this->load->view('viregister.php');
    }
}
?>