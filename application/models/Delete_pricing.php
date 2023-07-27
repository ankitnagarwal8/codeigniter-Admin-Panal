<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete_pricing extends CI_Model {


      public function delete_data($id){
      $this->db->where("id", $id);
      $this->db->delete("pricing_part_second");
      return true;
      
   }
}