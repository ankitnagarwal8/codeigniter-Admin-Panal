<?php
class trainers_data extends CI_Model 
{
	function index()
	{
		    $this->load->database();
			$this->db->select('*');
			$this->db->from("admin_traner");
			$q=$this->db->get()->result_array();
		
	
		return $q;
	}
	function trainers_part2(){

			$this->load->database();
			$this->db->select('*');
			$this->db->from("teachers_data");
			$data=$this->db->get()->result_array();
			
			

	
		return $data;

	}
}