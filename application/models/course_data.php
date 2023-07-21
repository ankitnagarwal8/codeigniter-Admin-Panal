

<?php
class course_data extends CI_Model 
{
	function index()
	{
			$this->load->database();
			$this->db->select('*');
			$this->db->from("admin_course");
			$data=$this->db->get()->result_array();
		
		return $data;
	}
	
	function part2(){
			$this->load->database();
			$this->db->select('*');
			$this->db->from("admin_course_part2");
			$data=$this->db->get()->result_array();
		return $data;
	}
	function edit_course_details($id){

		$this->load->database();
      	$q=$this->db->query("select * from admin_course_part2 where id=$id");
      
      return $q->result_array();
	}
}