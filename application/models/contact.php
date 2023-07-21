<?php
class contact extends CI_Model 
{
	function index()
	{
		$this->load->database();
			$this->db->select('*');
			$this->db->from("contact");
			$data=$this->db->get()->result_array();
		
	
		return $data;
	}
}