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
        $submit = $this->input->post('submit');
        if (isset($submit))
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
            } else {
                $error = validation_errors();
            }
            $data['error'] = $error;
            $this->load->template('vhome', $data);
        } else
            $this->load->template('vhome');
    }

    public function showstudform()
    {
        $this->load->template('studreg');
    }

    public function showcomform()
    {
        $this->load->template('comreg');
    }

    public function showintform()
    {
        $this->load->template('intreg');
    }

    public function creg()
    {
        //this will get data from form
        //start here
        $submit = $this->input->post('submit');
        if (isset($submit)) {
            $config = array(
                array(
                    'field' => 'name',
                    'label' => 'Name',
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
                array(
                    'field' => 'tc',
                    'label' => 'Terms & Conditions',
                    'rules' => 'required',
                    'errors' => array(
                        'required' => 'You must agree with %s'
                    )
                ),
            );

            $this->form_validation->set_rules($config);

            if ($this->form_validation->run() == true)
            {
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


                if (isset($submit)) {
                    $s = $this->sitemodel->cregister($params);
                }
                //end here

                //here check that data is inserted or not and redirect according
                //insert method will return 0 or 1
                if (isset($s)) {
                    if ($s == 1) {
                        /*echo '<script src=' . base_url() . 'tpc_asset/js/sweetalert.min.js></script>';
                        echo '<link href=' . base_url() . 'tpc_asset/css/sweetalert.css>';
                        echo '<script type="text/javascript">';
                        echo 'setTimeout(function () { swal("Message From Admin!","You Are register wait for approval!");';
                        echo '}, 1000);';*/
                        echo "<script>alert('Data Save');";
                        echo "window.location.href='../'; </script>";
                    } else
                        echo "<script>alert('Data not Save');</script>";
                }
            } else {
                $error = validation_errors();
            }
            $data['error'] = $error;
            $this->load->template('comreg', $data);
        } else {
            $this->load->template('comreg');
        }
    }



    public function sreg()
    {
        //this will get data from form
        //start here
        $submit = $this->input->post('ssubmit');
        if (isset($submit))
        {
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
                $gender = null;
                $city = null;
                $submit = null;

                extract($_POST);
                $params['fname'] = $fname;
                $params['lname'] = $lname;
                $params['email'] = $email;
                $params['pass'] = $pass;
                $params['gender'] = $this->input->post('gender');
                $params['city'] = $city;

                $submit = $this->input->post('ssubmit');
                if (isset($submit)) {
                    $s = $this->sitemodel->sregister($params);
                }
                //end here

                //here check that data is inserted or not and redirect according
                //insert method will return 0 or 1
                if (isset($s)) {
                    if ($s == 1) {
                        /*echo '<script src=' . base_url() . 'tpc_asset/js/sweetalert.min.js></script>';
                        echo '<link href=' . base_url() . 'tpc_asset/css/sweetalert.css>';
                        echo '<script type="text/javascript">';
                        echo 'setTimeout(function () { swal("Message From Admin!","You Are registered wait for approval!");';
                        echo '}, 1000);';*/
                        echo "<script>alert('Data Save');";
                        echo "window.location.href='../'; </script>";
                    } else
                        echo "<script>alert('Data not Save');</script>";
                }
            }
            else
            {
                $error = validation_errors();
            }
            $data['error'] = $error;
            $this->load->template('studreg', $data);
        }
        else
        {
            $this->load->template('studreg');
        }
    }

    public function ireg()
    {
        //this will get data from form
        //start here
        $submit = $this->input->post('isubmit');
        if (isset($submit)) {
            $config = array(
                array(
                    'field' => 'name',
                    'label' => 'Name',
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

            if ($this->form_validation->run() == true) {

                $name = null;
                $email = null;
                $pass = null;
                $city = null;
                $itype = null;

                extract($_POST);
                $params['name'] = $name;
                $params['email'] = $email;
                $params['pass'] = $pass;
                $params['city'] = $city;
                $params['itype'] = $itype;

                if (isset($submit)) {
                    $s = $this->sitemodel->iregister($params);
                }
                //end here

                //here check that data is inserted or not and redirect according
                //insert method will return 0 or 1
                if (isset($s)) {
                    if ($s == 1) {
                        ?>
                        <script src="<?= RES_URL; ?>js/sweetalert.min.js"></script>
                        <link href="<?= RES_URL; ?>css/sweetalert.css">
                        <?php
                        echo '<script type="text/javascript">';
                        echo 'setTimeout(function () { swal("WOW!","Message!","success");';
                        echo '}, 1000);';
                        echo "window.location.href='../'; </script>";

                    } else
                        echo "<script>alert('Data not Save');</script>";
                }

            } else
            {
                $error = validation_errors();
            }
            $data['error'] = $error;
            $this->load->template('intreg', $data);
        } else {
            $this->load->template('intreg');
        }
    }
}
?>