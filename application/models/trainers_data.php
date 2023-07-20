<?php
class trainers_data extends CI_Model 
{
	function index()
	{
		    $this->load->database();
			$this->db->select('*');
			$this->db->from("admin_traner");
			$data=$this->db->get()->result_array();
		
	
		return $data;
	}
	function trainers_part2(){

			$this->load->database();
			$this->db->select('*');
			$this->db->from("teachers_data");
			$data=$this->db->get()->result_array();
			
			

	
		return $data;

	}
}