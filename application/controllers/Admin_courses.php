<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_courses extends CI_Controller {

	public function index()
	{
        $this->load->model('course_data');
        $data['results'] = $this->course_data->index();
		$this->load->view('Admin_course',$data);
	}
	public function course_part1(){
		$heading = $this->input->post('frist_h1');
		$text_area = $this->input->post('text_area');

		 $updateArr=array(
                    'heading'=>$heading,
                    'paragraph'=>$text_area
                    );
        $this->load->database();
        $update=$this->db->update('admin_course', $updateArr);

         if($update){
            $this->load->view('Admin_course'); 
         }else{
           echo "data not updated";
        }
	}
	public function course_part2(){
		$coursename = $this->input->post('coursename');
		$coursepart = $this->input->post('course_part');
		$courseprice = $this->input->post('course_price');
		$text_area = $this->input->post('text_area');
		

		$files_get=$_FILES["image"]["name"];
            if(!empty($files_get)){
                $config['upload_path'] = './photos/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|';
                $config['max_size'] = 20000;
                $config['max_width'] = 15000;
                $config['max_height'] = 15000;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('image')) {
                    $error = array('error' => $this->upload->display_errors()); 
                    print_r($error);   
                }
                else{
                    $data = array(
                       'image_metadata' => $this->upload->data()
                    );
          
                    $updateArr=array(
                    'coursename'=>$coursename,
                    'coursepart'=>$coursepart,
                    'courseprice'=>$courseprice,
                    'text_area'=>$text_area,
                    "photo"=> $data['image_metadata']['file_name']
                    );
                     
                    $update=$this->db->insert('admin_course_part2', $updateArr);
                    }
                }else{
                    $updateArr=array(
                     'coursename'=>$coursename,
                    'coursepart'=>$coursepart,
                    'courseprice'=>$courseprice,
                    'text_area'=>$text_area
                    );

                  
                   $update=$this->db->insert('admin_course_part2', $updateArr);
                 

                }   
                if($update){
                    $this->load->view('Admin_course');
                }else{
                    echo "data not updated";
                }






	}
	public function course_edit($id){

			$this->load->model('course_data');
			$data['results'] = $this->course_data->edit_course_details($id);

			$this->load->view('edit_course',$data);
			
	}
	public function course_edit_data($id){
		$coursename = $this->input->post('coursename');
		$coursepart = $this->input->post('course_part');
		$courseprice = $this->input->post('course_price');
		$text_area = $this->input->post('text_area');
		
		$files_get=$_FILES["image"]["name"];
            if(!empty($files_get)){
                $config['upload_path'] = './photos/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|';
                $config['max_size'] = 20000;
                $config['max_width'] = 15000;
                $config['max_height'] = 15000;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('image')) {
                    $error = array('error' => $this->upload->display_errors()); 
                    print_r($error);   
                }
                else{
                    $data = array(
                       'image_metadata' => $this->upload->data()
                    );
          
                    $updateArr=array(
                    'coursename'=>$coursename,
                    'coursepart'=>$coursepart,
                    'courseprice'=>$courseprice,
                    'text_area'=>$text_area,
                    "photo"=> $data['image_metadata']['file_name']
                    );
                     $this->db->where("id",$id);
                    $update=$this->db->update('admin_course_part2', $updateArr);
                    }
                }else{
                    $updateArr=array(
                     'coursename'=>$coursename,
                    'coursepart'=>$coursepart,
                    'courseprice'=>$courseprice,
                    'text_area'=>$text_area
                    );
                   $this->db->where("id",$id);
                   $update=$this->db->update('admin_course_part2', $updateArr);
                 

                }   
                if($update){
                    return $this->load->view('Admin_course');
                }else{
                    echo "data not updated";
                }





	}
}
	

