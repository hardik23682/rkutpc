<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mstudent extends CI_Model
{
	public function drive()
	{
	$this->db->select('*');
	$this->db->from('campus_drive');
	$this->db->join('company_master', 'campus_drive.company_id =
	company_master.company_id');
	$q1 = $this->db->get();
	if($q1->num_rows()>0)
        {
			return $q1->result();
			/*echo $row=>$company_id;*/
			/*$tab1=array(
			'company_id'=>$row->company_id,
			'type'=>$row->type,
			'name'=>$row->job_title,
			'job_details'=>$row->job_details,
			'loaction'=>$row->location,
			'skill_req'=>$row->skill_required,
			'eligibility'=>$row->eligibility,
			'postion'=>$row->postion,
			'ctc'=>$row->CTC,
			'cligibleyaer'=>$row->eligibleyear,
			'eligiblebranch'=>$row->eligiblebranch,
			'boad_details'=>$row->bond_details,
			'last_date'=>$row->reg_last_date,
			'join_date'=>$row->joing_date,
			'drive_date'=>$row->drive_date,
			'drive_naem'=>$row->drive_vanue,
			'selection_process'=>$row->selection_process,
			'contact_person'=>$row->contact_person,
			'mobile'=>$row->mobile,
			'email'=>$row->email,
			'other_info'=>$row->other_info,
			'attachement'=>$row->attacement
			);
			$this->db->where('company_id',$tab1[0]->c_id);
			$q2=$this->db->get('company_master');
			if($q2->num_rows()>0)
        	{
			$tab2=$q2->result();
			$data=array('table1'=>$tab1,'table2'=>$tab2);
				return $data;
			}*/
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
			/*return $row;
			echo $row->company_id;
			echo "<hr>";
			echo $row->type;
			echo "<hr>";
			echo $row->job_title;
			echo "<hr>";
			echo $row->job_details;
			echo "<hr>";
			echo $row->location;
			echo "<hr>";
			echo $row->skill_required;
			echo "<hr>";
			echo $row->eligibility;
			echo "<hr>";
			echo $row->postion;
			echo "<hr>";
			echo $row->CTC;
			echo "<hr>";
			echo $row->eligibleyear;
			echo "<hr>";
			echo $row->eligiblebranch;
			echo "<hr>";
			echo $row->bond_details;
			echo "<hr>";
			echo $row->reg_last_date;
			echo "<hr>";
			echo $row->joing_date;
			echo "<hr>";
			echo $row->drive_date;
			echo "<hr>";
			echo $row->drive_vanue;
			echo "<hr>";
			echo $row->selection_process;
			echo "<hr>";
			echo $row->contact_person;
			echo "<hr>";
			echo $row->mobile;
			echo "<hr>";
			echo $row->email;
			echo "<hr>";
			echo $row->other_info;
			echo "<hr>";
			echo $row->attacement;
			*/
		}
		else
		{
			echo "No Record Found";
		}
	}
}

?>