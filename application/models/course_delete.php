<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class course_delete extends CI_Model {


      public function delete_data($id){
      $this->db->where("id", $id);
      $this->db->delete("admin_course_part2");
      return true;
      
   }
}