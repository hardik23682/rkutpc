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

<<<<<<< HEAD
                if (isset($submit))
                {
=======
                if (isset($submit)) 
				{
>>>>>>> origin/master
                    $res = $this->sitemodel->login($uname, $pass);
                }

                if ($res['valid']) 
				{
                    if ($res['is_approved'] == 1) 
					{
                        $this->session->set_userdata('logged_in', $res);
                        if ($res['type'] == 'company') {
                            $this->session->set_flashdata('email',$uname);
                            redirect(base_url() . 'ccompany');
                        }
                        else if ($res['type'] == 'student')
                            //$this->load->view("student");
							redirect('cstudent/index');
                        else
                            $this->load->view("institute");
                    } 
					else
                        $error = "Your account not activated by Administrator. Please try after sometime";
                } 
				else 
				{
                    $error = "Invalid Credential";
                }
            } 
			else 
			{
                $error = validation_errors();
            }
            $data['error'] = $error;
            $this->load->template('vhome',$data);
        } 
		else
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

    public function number()
    {
        $nm=$this->input->post('name');
        if(preg_match('~[0-9]~',$nm))
        {
            $this->form_validation->set_message('number', 'number(s) not allowed in Company %s');
            return false;
        }
        else
            return true;
    }

    public function checkpass()
    {
        $pass=$this->input->post('pass');

        if(!preg_match("/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]{8,20}$/",$pass))
        {
            $this->form_validation->set_message('checkpass', '%s must contain minimum 8 characters and maximum 20 characters of letters, numbers and at least one special character.');
            return false;
        }
        else
            return true;
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
                    'rules' => 'required|callback_number',
                    'errors' => array(
                        'required' => 'You must provide a %s'
                    )
                ),
                array(
                    'field' => 'email',
                    'label' => 'Email Id',
                    'rules' => 'required|valid_email|is_unique[login.username]',
                    'errors' => array(
                        'required' => 'You must provide a %s',
                        'valid_email' => '%s is not valid',
                        'is_unique' => '%s Already Registered'
                    )
                ),
                array(
                    'field' => 'pass',
                    'label' => 'Password',
                    'rules' => 'required|callback_checkpass',
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
                    'rules' => 'required|alpha',
                    'errors' => array(
                        'required' => 'You must provide a %s',
                        'alpha'=>'Must enter characters only in %s'
                    )
                ),
                array(
                    'field' => 'tc',
                    'label' => 'Terms & Conditions',
                    'rules' => 'required',
                    'errors' => array(
                        'required' => 'You must agree with %s'
                    )
                )
            );
            $this->form_validation->set_error_delimiters('<span class="label label-warning">', '</span>');
            $this->form_validation->set_rules($config);

            if ($this->form_validation->run() == true) {
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
                        $success = "Your request is received, Please wait for Admin approval";
                        $data['success'] = $success;
                        $data['reset']=true;
                        $this->load->template('comreg', $data);
                    } else
                        echo "<script>alert('Data not Save');</script>";
                }
            } else {
                $error = validation_errors();
            }
            if (isset($error)) {
                $data['error'] = $error;
                $data['reset']=false;
                $this->load->template('comreg', $data);
            }
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
                    'rules' => 'required|alpha',
                    'errors' => array(
                        'required' => 'You must provide a %s',
                        'alpha'=>'Must enter characters only in %s'
                    )
                ),
                array(
                    'field' => 'lname',
                    'label' => 'Last Name',
                    'rules' => 'required|alpha',
                    'errors' => array(
                        'required' => 'You must provide a %s',
                        'alpha'=>'Must enter characters only in %s'
                    )
                ),
                array(
                    'field' => 'email',
                    'label' => 'Email Id',
                    'rules' => 'required|valid_email|is_unique[login.username]',
                    'errors' => array(
                        'required' => 'You must provide a %s',
                        'valid_email' => '%s is not valid',
                        'is_unique'=>'%s Already Registered'
                    )
                ),
                array(
                    'field' => 'pass',
                    'label' => 'Password',
                    'rules' => 'required|callback_checkpass',
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
                    'field' => 'gender',
                    'label' => 'Gender',
                    'rules' => 'required',
                    'errors' => array(
                        'required' => 'Please choose %s'
                    )
                ),
                array(
                    'field' => 'city',
                    'label' => 'City',
                    'rules' => 'required|alpha',
                    'errors' => array(
                        'required' => 'You must provide a %s',
                        'alpha'=>'Must enter characters only in %s'
                    )
                ),
                array(
                    'field' => 'tc',
                    'label' => 'Terms & Conditions',
                    'rules' => 'required',
                    'errors' => array(
                        'required' => 'You must agree with %s'
                    )
                )
            );
            $this->form_validation->set_error_delimiters('<span class="label label-warning">', '</span>');
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
                        $success = "Your request is received, Please wait for Admin approval";
                        $data['success'] = $success;
                        $data['reset']=true;
                        $this->load->template('studreg', $data);
                    } else
                        echo "<script>alert('Data not Save');</script>";
                }
            }
            else
            {
                $error = validation_errors();
            }
            if(isset($error)) {
                $data['error'] = $error;
                $data['reset']=false;
                $this->load->template('studreg', $data);
            }
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
                    'rules' => 'required|alpha',
                    'errors' => array(
                        'required' => 'You must provide a %s',
                        'alpha'=>'Must enter characters only in %s'
                    )
                ),
                array(
                    'field' => 'email',
                    'label' => 'Email Id',
                    'rules' => 'required|valid_email|is_unique[login.username]',
                    'errors' => array(
                        'required' => 'You must provide a %s',
                        'valid_email' => '%s is not valid',
                        'is_unique' => '%s Already Registered'
                    )
                ),
                array(
                    'field' => 'pass',
                    'label' => 'Password',
                    'rules' => 'required|callback_checkpass',
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
                    'rules' => 'required|alpha',
                    'errors' => array(
                        'required' => 'You must provide a %s',
                        'alpha'=>'Must enter characters only in %s'
                    )
                ),
                array(
                    'field' => 'tc',
                    'label' => 'Terms & Conditions',
                    'rules' => 'required',
                    'errors' => array(
                        'required' => 'You must agree with %s'
                    )
                )
            );
            $this->form_validation->set_error_delimiters('<span class="label label-warning">', '</span>');
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
                    if ($s == 1)
                    {
                        $success = "Your request is received, Please wait for Admin approval";
                        $data['success'] = $success;
                        $data['reset']=true;
                        $this->load->template('intreg', $data);
                    } else
                        echo "<script>alert('Data not Save');</script>";
                }

            } else {
                $error = validation_errors();
            }
            if (isset($error)) {
                $data['error'] = $error;
                $data['reset']=false;
                $this->load->template('intreg', $data);
            }
        } else {
            $data['reset']=false;
            $this->load->template('intreg',$data);
        }
    }
}
?>