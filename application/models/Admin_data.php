<?php
class Admin_data extends CI_Model 
{
	function index($id)
	{

		$this->load->database();
		$q=$this->db->query("select * from admin where id=$id");
		
		return $q->result_array();
	}
	public function getdata()
	{
		$this->load->database();
		$q=$this->db->query("select * from admin");
		return $q->result_array();

	}
}