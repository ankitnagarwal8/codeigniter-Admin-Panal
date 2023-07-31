<?php 


class Basic_Details extends CI_Controller
{
	
	public function index(){
		$this->load->model('Basic_Data');
		$countalldata = $this->Basic_Data->record_count();
		print_r($countalldata);
		die;
		$this->load->view('Admin',$countalldata);
	}
}



?>