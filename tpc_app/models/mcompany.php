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
				'esyear'=>$row->est_year,
				'website'=>$row->website,
				'domain'=>$row->domain,
				'cpname'=>$row->contact_person,
				'detail'=>$row->details,
				'desg'=>$row->desg,
				'con1'=>$row->contact1,
				'con2'=>$row->contact2,
				'logo'=>$row->prof_pic
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
			'contact2'=>$field['con2'],
			'prof_pic'=>$field['prof_pic']
		);

		$this->db->where('email',$field['email']);
		$q=$this->db->update('company_master',$data);
		return $q;
	}

	public function addDrive($data)
	{
		$data = array(
			'job_title' => $data['jtitle'],
			'job_details' => $data['jdetail'],
			'location' => $data['jlocation'],
			'skill_required' => $data['skrd'],
			'eligibility' => $data['eligible'],
			'position' => $data['pos'],
			'ctc' => $data['ctc'],
			'eligibleyear' => $data['yr'],
			'eligiblebranch' => $data['br'],
			'bond_details' => $data['bddetails'],
			'reg_last_date' => $data['lrdate'],
			'joing_date' => $data['jdate'],
			'drive_date' => $data['ddate'],
			'selection_process' => $data['sp'],
			'contact_person' => $data['cperson'],
			'mobile' => $data['mno'],
			'email' => $data['email'],
			'other_info' => $data['otherinfo'],
			'type'=>$data['dtype'],
			'company_id'=>$data['company_id'],
			'drive_venue'=>$data['venue'],
			'post_date'=>date('d-m-Y'),
			'attacement'=>$data['attachment']
		);

		$res=$this->db->insert("campus_drive",$data);
		return $res;
	}
}
?>