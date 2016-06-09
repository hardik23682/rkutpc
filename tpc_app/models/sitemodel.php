<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sitemodel extends CI_Model
{
    public function cregister($data)
    {
        //get fields values from controller
        $fields=array(
            'name'=>$data['name'],
            'email'=>$data['email'],
            'city'=>$data['city']
        );
        //insert values into database
        $this->db->insert("company_master",$fields);

        $fields=null;
        $fields=array(
            'username'=>$data['email'],
            'password'=>md5($data['pass']),
            'type'=>'company'
        );
        //insert values into database
        return $this->db->insert("login",$fields);
    }

    public function sregister($data)
    {
        //get fields values from controller
        $fields=array(
            'fname'=>$data['fname'],
            'lname'=>$data['lname'],
            'email'=>$data['email'],
            'gender'=>$data['gender'],
            'nativ_city'=>$data['city']
        );
        //insert values into database
        $this->db->insert("stud_master",$fields);

        $fields=null;
        $fields=array(
            'username'=>$data['email'],
            'password'=>md5($data['pass']),
            'type'=>'student'
        );
        //insert values into database
        return $this->db->insert("login",$fields);
    }

    public function iregister($data)
    {
        //get fields values from controller
        $fields=array(
            'sch_name'=>$data['name'],
            'email'=>$data['email'],
            'city'=>$data['city'],
            'schooltype'=>$data['itype']
        );

        //insert values into database
        $this->db->insert("school_master",$fields);

        $fields=null;
        $fields=array(
            'username'=>$data['email'],
            'password'=>md5($data['pass']),
            'type'=>'institute'
        );
        //insert values into database
        return $this->db->insert("login",$fields);
    }

    public function login($uname,$pass)
	{
	    $this->db->where('username',$uname);
        $this->db->where('password',md5($pass));
        $this->db->where('state',1);
        $this->db->limit(1);

        $q=$this->db->get('login');

        if($q->num_rows()>0)
        {
			$row=$q->row();
			$data=array(
				'uname'=>$row->username,
				'type'=>$row->type,
                'is_approved'=>$row->is_approved,
                'valid'=>true
			);
			return $data;
		}
        else
            return array('valid'=>false);
    }
}
?>

