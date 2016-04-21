<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mstudent extends CI_Model
{
	public function save()
	{
		$nama = $_POST['name'];
		$qry="insert into creg(name) VALUE ('".$nama."')";
		$this->db->query($qry);
		redirect('ccompany');
	}
}
?>