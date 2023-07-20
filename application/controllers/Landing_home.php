<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing_home extends CI_Controller {

	public function index()
	{
		$this->load->model('home_data');
        $data['results'] = $this->home_data->index();

        $this->load->model('home_data');
        $data['results2'] = $this->home_data->home_part_2();

        $this->load->model('home_data');
        $data['results3'] = $this->home_data->home_part_3();

        $this->load->model('trainers_data');
		$data['results7'] = $this->trainers_data->trainers_part2();
     
        $this->load->view('index',$data);
	}
	public function about(){
		$this->load->model('home_data');
        $data['results2'] = $this->home_data->home_part_2();

        $data['results'] = $this->about_data->index();
        $data['results3'] = $this->about_data->about_data_part2();

		$this->load->view('about.php',$data);
	}
	public function course(){
		$this->load->view('courses.php');
	}
	public function events(){
		$this->load->view('events.php');
	}
	public function trainers(){
		$this->load->model('trainers_data');
		$data['results'] = $this->trainers_data->index();
		$data['results2'] = $this->trainers_data->trainers_part2();

		$this->load->view('trainers.php',$data);
	}
	public function contact(){
		$this->load->view('contact.php');
	}
	public function pricing(){
		$this->load->view('pricing.php');
	}
	public function course_details(){
		$this->load->view('course_details.php');
	}

	

}
