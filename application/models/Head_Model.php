<?php
class Head_Model extends CI_Model 
{
	function HOD($email,$pass){
		
		$this->load->database();

  		$this->db ->where('email',$email);  
        $this->db->where('password',$pass);
        $data= $this->db->get('admin')->num_rows();

        if ($data>0)  
        {  
			return true;  
        } else {  
        
            return false;  
        }
	}
}