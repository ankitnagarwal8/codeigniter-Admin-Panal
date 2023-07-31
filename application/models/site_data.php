<?php
class site_data extends CI_Model 
{
	function index()
	{
		$this->load->database();
		$q=$this->db->query("select * from site_name");
		$data = $q->result_array();
		return $data;
		
	}
}