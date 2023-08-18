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

		$this->load->model('course_data');
        $data['results24'] = $this->course_data->part2();

        
        $this->load->model('site_data');
        $data['datas4'] = $this->site_data->index();

     	$data['results9090'] = $this->contact->index();
        $this->load->view('index',$data);
	}
	public function about(){
		$this->load->model('home_data');
        $data['results2'] = $this->home_data->home_part_2();
        $data['results9090'] = $this->contact->index();
        $data['results'] = $this->about_data->index();
        $data['results3'] = $this->about_data->about_data_part2();

        $this->load->model('site_data');
        $data['datas4'] = $this->site_data->index();

		$this->load->view('about.php',$data);
	}
	public function course(){
		$this->load->model('course_data');
		$data['results9090'] = $this->contact->index();
		$data['results23'] = $this->course_data->index();

		$data['results24'] = $this->course_data->part2();

		$this->load->model('site_data');
        $data['datas4'] = $this->site_data->index();

		$this->load->view('courses.php',$data);
	}
	public function events(){
		
		$this->load->model('site_data');
        $data['datas4'] = $this->site_data->index();


		$this->load->model('events_data');
		$data['events_details'] = $this->events_data->index();

		$this->load->model('events_data');
		$data['details2'] = $this->events_data->events_part_2();

		$this->load->model('contact');
		$data['results9090'] = $this->contact->index();
		$this->load->view('events.php',$data);
	}
	public function trainers(){
		$this->load->model('trainers_data');
		$data['results9090'] = $this->contact->index();
		$data['results'] = $this->trainers_data->index();
		$data['results2'] = $this->trainers_data->trainers_part2();

		$this->load->model('site_data');
        $data['datas4'] = $this->site_data->index();

		$this->load->view('trainers.php',$data);
	}
	public function contact(){
		$this->load->model('contact');
		$data['results9090'] = $this->contact->index();

		$this->load->model('site_data');
        $data['datas4'] = $this->site_data->index();

		$this->load->view('contact.php',$data);
	}
	public function pricing(){
		$this->load->model('Pricing_data');
		$data['res'] = $this->Pricing_data->index();

		$this->load->model('Pricing_data');
		$data['ressult990'] = $this->Pricing_data->part2();

		$data['results9090'] = $this->contact->index();

		$this->load->model('site_data');
        $data['datas4'] = $this->site_data->index();

		$this->load->view('pricing.php',$data);
	}
	public function course_details(){

		$this->load->model('site_data');
        $data['datas4'] = $this->site_data->index();


		$data['results9090'] = $this->contact->index();
		$this->load->view('course_details.php');


	}
	public function footer(){
		$this->load->model('site_data');
        $data['datas4'] = $this->site_data->index();
		
		$this->load->model('contact');
		$data['results9090'] = $this->contact->index();

		$this->load->view('footer',$data);
	}
	

	

}
