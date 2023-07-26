<?php
class events_data extends CI_Model 
{
	function index()
	{
		$this->load->database();
		$this->db->select('*');
		$this->db->from("events_admin_part_frist");
		$data=$this->db->get()->result_array();
		
	
		return $data;
	}
	function events_part_2(){
		$this->load->database();
		$this->db->select('*');
		$this->db->from("events_admin_part_seconds");
		$data=$this->db->get()->result_array();
		
		return $data;
	}
}