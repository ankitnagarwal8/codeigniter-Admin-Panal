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
	function get_admin_data($id){
		$this->load->database();
		$this->db->where('id',$id);
		$res=$this->db->get('admin');

		return $res->result_array();


	}
	function match_old_pass($oldpass1){
		$this->load->database();

        $this->db->where('password',$oldpass1);

        $data= $this->db->get('admin')->num_rows();

        if ($data>0)  
        {
			return true;  
        } else {  
            return false;  
        }
	}
	function updating($newpass1){
		$this->load->database();
		$updateArr=array(
                        'password'=>$newpass1
                    );
        $update=$this->db->update('admin', $updateArr);

        if($update){
        	return true;
        }else{
        	return false;
        }
	}
}