<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mstudent extends CI_Model
{
	public function mevent()
	{
	$this->db->select('*');
	$this->db->from('event_master');
	$this->db->where('is_active',1);	
	$q1 = $this->db->get();
	if($q1->num_rows()>0)
        {
			return $q1->result();
		}
	}
	public function news()
	{
	$this->db->select('*');
	$this->db->from('news');
	$this->db->where('enable',1);	
	$q1 = $this->db->get();
	if($q1->num_rows()>0)
        {
			return $q1->result();
		}
	}
	public function fullnews($id)
	{
		$this->db->select('*');
	$this->db->from('news');
	$this->db->where('ID',$id);
	$q1 = $this->db->get();
	if($q1->num_rows()>0)
    {
			return $q1->row();	
	}
	else
	{
		echo "No Record Found";
	}
	}
	public function getprofile($uid)
	{
	$this->db->select('*');
	$this->db->from('stud_master');
	$this->db->where('email',$uid);
	//$this->db->join('company_master', 'campus_drive.company_id =
	//company_master.company_id');
	
	$q1 = $this->db->get();
	if($q1->num_rows()>0)
    {
			return $q1->row();	
	}
	else
	{
		echo "No Record Found";
	}
	}
	public function drive()
	{
	$this->db->select('*');
	$this->db->from('campus_drive');
	$this->db->join('company_master','campus_drive.company_id =
	company_master.company_id');
	$this->db->where('`c_id` NOT IN (SELECT `c_id` FROM `drive_participation`)');
	$q1 = $this->db->get();
	if($q1->num_rows()>0)
        {
			return $q1->result();
		}
	}
	public function fulldrive($drive_id)
	{
	$this->db->select('*');
	$this->db->from('campus_drive');
	$this->db->where('c_id',$drive_id);
	$this->db->join('company_master', 'campus_drive.company_id =
	company_master.company_id');
	
	$q1 = $this->db->get();
	if($q1->num_rows()>0)
    {
			return $q1->row();	
	}
	else
	{
		echo "No Record Found";
	}
	}
	public function drivepart($drive_part)
	{
		//print_r($drive_part);
		$fields=null;
        $fields=array(
            'c_id'=>$drive_part['cid'],
            'stud_id'=>$drive_part['sid'],
            'Atest'=>$drive_part['atest'],
			'techinal'=>$drive_part['tech'],
			'gd'=>$drive_part['gd'],
			'PI'=>$drive_part['pi'],
			'is_active'=>'0'
        );
		return $this->db->insert("drive_participation",$fields);

	}
}

?>