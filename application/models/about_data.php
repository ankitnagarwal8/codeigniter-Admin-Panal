<?php
class about_data extends CI_Model 
{
	function index()
	{
		$this->load->database();
			$this->db->select('*');
			$this->db->from("about_part_1");
			$data=$this->db->get()->result_array();
		
	
		return $data;
	}
	function about_data_part2(){
		$this->load->database();
		$this->db->select('*');
		$this->db->from("about_part_2");
		$data=$this->db->get()->result_array();
		
	
		return $data;
	}
}