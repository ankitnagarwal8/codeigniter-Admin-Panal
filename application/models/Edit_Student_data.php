
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit_Student_data extends CI_Model {

   function get_profile_edit_data($id){
         
      $this->load->database();
      $q=$this->db->query("select * from students_data where id=$id");
      
      return $q->result_array();

   }
   

}





?>