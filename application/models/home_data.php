<?php
class home_data extends CI_Model 
{
	function index()
	{
		$this->load->database();

		$q = $this->db->query("select * from home");

		return $q->result_array();


	}
	function home_part_2(){
			$this->load->database();
			$this->db->select('*');
			$this->db->from("home_part_2");
			$data=$this->db->get()->result_array();
		
	
		return $data;
	}
	function home_part_3(){

		$this->load->database();
		$this->db->select('*');
		$this->db->from("home_part_3");
		$data=$this->db->get()->result_array();
		
		return $data;
	}
}