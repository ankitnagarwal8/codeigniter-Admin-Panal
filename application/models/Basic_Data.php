<?php

class Basic_Data extends CI_Model{

		function record_count() {
   			return $this->db->count_all("students_data");
		}
}




?>