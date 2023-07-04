<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {

	public function index(){
		$this->load->view('Teacheres_Datails');
	}
	public function Registration(){
		$this->load->view('Add_Teacher_Details');
	}

	}