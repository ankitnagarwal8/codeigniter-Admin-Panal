<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_contact extends CI_Controller {

	public function index()
	{
		
		$this->load->view('Admin_contact');
	}
	public function contact_part1(){
		$heading = $this->input->post('heading');
		$paragraph_frist = $this->input->post('paragraph_frist');
		$email_id = $this->input->post('email_id');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$phone_number = $this->input->post('phone_number');
		$location_name = $this->input->post('location_name');
		$full_address = $this->input->post('full_address');
		$title = $this->input->post('title');
		$title_paragraph = $this->input->post('title_paragraph');


		$updateArr = array(
			'heading'=>$heading,
			'paragraph'=>$paragraph_frist,
			'email_id'=>$email_id,
			'email'=>$email,
			'phone'=>$phone,
			'phone_number'=>$phone_number,
			'location_name'=>$location_name,
			'address'=>$full_address,
			'title'=>$title,
			'title_paragraph'=>$title_paragraph

		);

		$update =$this->db->update('contact',$updateArr);

		if($update){
			return $this->load->view('Admin_contact');
		}else{
			echo "data not updated";
		}

		

	}
}