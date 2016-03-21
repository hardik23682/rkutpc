<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SiteController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('sitemodel'));
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $submit=$this->input->post('submit');
        if(isset($submit))
        {
            $config = array(
                array(
                    'field' => 'uname',
                    'label' => 'E-mail',
                    'rules' => 'required|valid_email',
                    'errors' => array(
                        'required' => 'You must provide an %s',
                        'valid_email' => 'You must provide a valid %s'
                    )
                ),
                array(
                    'field' => 'pass',
                    'label' => 'Password',
                    'rules' => 'required',
                    'errors' => array(
                        'required' => 'You must provide a %s',
                    )
                )
            );

            $this->form_validation->set_rules($config);

            if ($this->form_validation->run() == true) {
                $uname = null;
                $pass = null;
                $submit = null;

                $uname = $this->input->post('uname');
                $pass = $this->input->post('pass');
                $submit = $this->input->post('submit');

                if (isset($submit)) {
                    $res = $this->sitemodel->login($uname, $pass);
                }

                if ($res['valid']) {
                    if ($res['is_approved'] == 1) {
                        $this->session->set_userdata('logged_in', $res);
                        if ($res['type'] == 'company')
                            $this->load->view("ccomany");
                        else if ($res['type'] == 'student')
                            $this->load->view("student");
                        else
                            $this->load->view("institute");
                    } else
                        $error = "Your account not activated by Administrator. Please try after sometime";
                } else {
                    $error = "Invalid Credential";
                }
            }
            else
            {
                $error = validation_errors();
            }
            $data['error']=$error;
            $this->load->template('vhome',$data);
        }
        else
            $this->load->template('vhome');
    }

	public function creg()
    {
        //this will get data from form
        //start here

        $name = null;
        $email = null;
        $pass = null;
        $city = null;
        $submit = null;

        extract($_POST);
        $params['name'] = $name;
        $params['email'] = $email;
        $params['pass'] = $pass;
        $params['city'] = $city;


        $submit=$this->input->post('csubmit');
        if (isset($submit)) {
            $s = $this->sitemodel->cregister($params);
        }
        //end here

        //here check that data is inserted or not and redirect according
        //insert method will return 0 or 1
        if (isset($s))
        {
            if ($s == 1)
            {
                echo "<script>
                    alert('Data Save');
                    window.location.href='../';
                    </script>";
            }
            else
                echo "<script>alert('Data not Save');</script>";
        }

    }

    public function sreg()
    {
        echo "<script>alert('jr');</script>";
        //this will get data from form
        //start here
        $submit = $this->input->post('ssubmit');
        if (isset($submit)) {
            $config = array(
                array(
                    'field' => 'fname',
                    'label' => 'First Name',
                    'rules' => 'required',
                    'errors' => array(
                        'required' => 'You must provide a %s'
                    )
                ),
                array(
                    'field' => 'lname',
                    'label' => 'Last Name',
                    'rules' => 'required',
                    'errors' => array(
                        'required' => 'You must provide a %s'
                    )
                ),
                array(
                    'field' => 'email',
                    'label' => 'Email Id',
                    'rules' => 'required|valid_email',
                    'errors' => array(
                        'required' => 'You must provide a %s',
                        'valid_email' => '%s is not valid'
                    )
                ),
                array(
                    'field' => 'pass',
                    'label' => 'Password',
                    'rules' => 'required',
                    'errors' => array(
                        'required' => 'You must provide a %s'
                    )
                ),
                array(
                    'field' => 'cpass',
                    'label' => 'Confirm Passowrd',
                    'rules' => 'required|matches[pass]',
                    'errors' => array(
                        'required' => 'You must provide a %s',
                        'matches' => 'Password & %s is not match'
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
            );

            $this->form_validation->set_rules($config);

            if ($this->form_validation->run() == true)
            {
                $fname = null;
                $lname = null;
                $email = null;
                $pass = null;
                $gen = null;
                $city = null;
                $submit = null;

                extract($_POST);
                $params['fname'] = $fname;
                $params['lname'] = $lname;
                $params['email'] = $email;
                $params['pass'] = $pass;
                $params['gender'] = $gen;
                $params['city'] = $city;

                $submit=$this->input->post('ssubmit');
                if (isset($submit)) {
                    $s = $this->sitemodel->sregister($params);
                }
                //end here

                //here check that data is inserted or not and redirect according
                //insert method will return 0 or 1
                if (isset($s)) {
                    if ($s == 1) {
                       echo "<script>
                                alert('Data Save');
                                window.location.href='../';
                            </script>";
                    } else
                        echo "<script>alert('Data not Save');</script>";
                }
            }
            else
            {
                echo "<script>alert('hello');</script>";
                $error = validation_errors();
            }
            $data['error'] = $error;
            print_r($data);
            //$this->load->template('vhome/#smodal', $data);
        } else {
            //$this->load->template('vhome/#smodal');
        }
    }

    public function ireg()
    {
        //this will get data from form
        //start here
        $name=null;
        $email=null;
        $pass=null;
        $city=null;
        $itype=null;

        extract($_POST);
        $params['name']=$name;
        $params['email']=$email;
        $params['pass']=$pass;
        $params['city']=$city;
        $params['itype']=$itype;

        $submit=$this->input->post('isubmit');
        if(isset($submit))
        {
            $s=$this->sitemodel->iregister($params);
        }
        //end here

        //here check that data is inserted or not and redirect according
        //insert method will return 0 or 1
        if(isset($s))
        {
            if ($s == 1)
            {
                echo "  <script>
                            alert('Data Save');
                            window.location.href='../';
                        </script>";

            }
            else
                echo "<script>alert('Data not Save');</script>";
        }
    }
}
?>