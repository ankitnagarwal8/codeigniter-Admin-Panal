<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class events_admin extends CI_Controller {

	public function index()
	{
		$this->load->view('events_admin');
	}
	public function Edit_Part_frist(){
		$heading = $this->input->post('heading');
		$paragraph = $this->input->post('paragraph');

		$updateArr = array(
			'heading'=>$paragraph,
			'paragraph'=>$paragraph
		);
		
		$update = $this->db->update('events_admin_part_frist',$updateArr);

		if($update){
			$this->load->view('events_admin');
		}else{
			echo "data not updated";
		}
	}
}


?>