<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_About extends CI_Controller {

	public function index()
	{
		$this->load->model('about_data');
		$data['results'] = $this->about_data->index();
		$data['results2'] = $this->about_data->about_data_part2();

		$this->load->model('site_data');
		$data['datas4'] = $this->site_data->index();

		$this->load->view('Admin_about',$data);
	}
	public function About_part1(){
		$text = $this->input->post('frist_h1');
		$text_box = $this->input->post('text_area');
		
		$updateArr=array(
                    'text'=>$text,
                    'text_box'=>$text_box
                    );
        $this->load->database();
        $update=$this->db->update('about_part_1', $updateArr);

         if($update){
            $this->index(); 
         }else{
           echo "data not updated";
        }
	}
	public function About_part2(){

		$heading_forth = $this->input->post('heading_forth');
		$heading_frist = $this->input->post('heading_frist'); 
		$text = $this->input->post('name');
		$post = $this->input->post('post');
		$text_box = $this->input->post('text_area');

		$updateArr=array(
					'heading_forth'=>$heading_forth,
					'heading_frist'=>$heading_frist,
                    'name'=>$text,
                    'post'=>$post,
                    'saying'=>$text_box
                    );
		
        $this->load->database();
        $update=$this->db->update('about_part_2', $updateArr);

         if($update){
            $this->index();  
         }else{
           echo "data not updated";
        }
	}
}