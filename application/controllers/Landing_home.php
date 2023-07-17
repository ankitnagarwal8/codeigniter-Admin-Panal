<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing_home extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function about(){
		$this->load->view('about.php');
	}
	public function course(){
		$this->load->view('courses.php');
	}
	public function events(){
		$this->load->view('events.php');
	}
	public function trainers(){
		$this->load->view('trainers.php');
	}
	public function contact(){
		$this->load->view('contact.php');
	}
	public function pricing(){
		$this->load->view('pricing.php');
	}
	

}
