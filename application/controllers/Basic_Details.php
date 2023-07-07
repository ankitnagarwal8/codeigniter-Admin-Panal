<?php 


class Basic_Details extends CI_Controller
{
	
	public function index(){
		$this->load->model('Basic_Data');
		$countalldata = $this->Basic_Data->record_count();
		$this->load->view('Admin',$countalldata);
	}
}



?>