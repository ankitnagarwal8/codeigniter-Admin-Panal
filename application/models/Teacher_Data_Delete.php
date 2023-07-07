
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teacher_Data_Delete extends CI_Model {

	function delete($id){
		$this->db->where("id", $id);
      	$this->db->delete("teachers_data");
        return true;
	}
}
