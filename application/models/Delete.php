<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete extends CI_Model {


      public function delete_data($id){
      $this->db->where("id", $id);
      $this->db->delete("students_data");
      return true;
      
   }
}