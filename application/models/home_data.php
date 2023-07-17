<?php
class home_data extends CI_Model 
{
	function index()
	{
		$this->load->database();

		$q = $this->db->query("select * from home");

		return $q->result_array();


	}
}