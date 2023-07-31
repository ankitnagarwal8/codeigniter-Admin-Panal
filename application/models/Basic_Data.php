<?php

class Basic_Data extends CI_Model{

		function record_count() {
   			return $this->db->count_all("students_data");
		}
		function record_count_teacher()
		{
			return $this->db->count_all("teachers_data");
		}
		function record_count_course(){
			return $this->db->count_all("admin_course_part2");
		}
}




?>