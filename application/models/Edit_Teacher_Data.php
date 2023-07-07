
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit_Teacher_data extends CI_Model {

   function get_profile_edit_data($id){
         
      $this->load->database();
      $q=$this->db->query("select * from teachers_data where id=$id");
      
      return $q->result_array();

   }
   

}





?>