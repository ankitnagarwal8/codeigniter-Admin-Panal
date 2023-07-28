<?php
class Admin_home_data extends CI_Model 
{
	function index()
	{
		$this->load->database();
		$q = $this->db->query('select * from home');

		return $q->result_array();
	}

	function homepartfrist(){

		$this->load->database();
		$q = $this->db->query('select * from home');
		$res = $q->result_array();
		
		return $res;
	}
	function homepartsecond(){

		$this->load->database();
		$q = $this->db->query('select * from home_part_2');
		$res = $q->result_array();
		
		return $res;
	}
	function homepartthird(){

		$this->load->database();
		$q = $this->db->query('select * from home_part_3');
		$res = $q->result_array();
		
		return $res;
	}

}