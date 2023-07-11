<?php
class Admin_data extends CI_Model 
{
	function index($id)
	{

		$this->load->database();
		$q=$this->db->query("select * from admin where id=$id");
		
		return $q->result_array();
	}
	function getdata()
	{
		$this->load->database();
		$q=$this->db->query("select * from admin");
		return $q->result_array();

	}
	function match_old_pass($oldpass){
		$this->load->database();


        $this->db->where('password',$oldpass);
        $data= $this->db->get('admin')->num_rows();

        if ($data>0)  
        {  
			return true;  
        } else {  
        
            return false;  
        }
	}
	function updating($newpass){
		$this->load->database();
		$updateArr=array(
                        'password'=>$newpass
                    );
        $update=$this->db->update('admin', $updateArr);

        if($update){
        	return true;
        }else{
        	return false;
        }
	}
}