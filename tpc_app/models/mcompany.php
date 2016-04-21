<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mcompany extends CI_Model
{
	public function getdata($email)
	{
		$q=$this->db->get_where('company_master',array('email'=>$email));

		if($q->num_rows()>0)
		{
			$row=$q->row();
			$data=array(
				'name'=>$row->name,
				'city'=>$row->city,
				'email'=>$row->email,
				'esyr'=>$row->est_year
			);
			return $data;
		}
	}

	public function update_profile($field)
	{
		$data=array(
			'name'=>$field['name'],
			'city'=>$field['city'],
			'website'=>$field['website'],
			'domain'=>$field['domain'],
			'details'=>$field['detail'],
			'est_year'=>$field['esyr'],
			'contact_person'=>$field['cpname'],
			'desg'=>$field['desg'],
			'contact1'=>$field['con1'],
			'contact2'=>$field['con2']
		);

		$this->db->where('email',$field['email']);
		$q=$this->db->update('company_master',$data);
		return $q;
	}
}
?>