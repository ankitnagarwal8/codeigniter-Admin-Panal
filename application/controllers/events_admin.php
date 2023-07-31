<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class events_admin extends CI_Controller {

	public function index()
	{
        $this->load->model('events_data');
        $data['results'] = $this->events_data->index();

        $this->load->model('site_data');
        $data['datas4'] = $this->site_data->index();

		$this->load->view('events_admin',$data);
	}
	public function Edit_Part_frist(){
		$heading = $this->input->post('heading');
		$paragraph = $this->input->post('paragraph');

		$updateArr = array(
			'heading'=>$heading,
			'paragraph'=>$paragraph
		);
		 $this->load->database();
		$update = $this->db->update('events_admin_part_frist',$updateArr);

		if($update){
			$this->load->view('events_admin');
		}else{
			echo "data not updated";
		}
	}

	public function Edit_Part_second_edit($id){
		 $heading=$this->input->post("heading");
		 $timing_details=$this->input->post("timing_details");
		 $details=$this->input->post("details");
		


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
                    'heading'=>$heading,
                    'timing_details'=>$timing_details,
                    'details'=>$details,
                    "image"=> $data['image_metadata']['file_name']
                    );
                     $this->db->where("id",$id);
                    $update=$this->db->update('events_admin_part_seconds', $updateArr);
                    }
                }else{
                    $updateArr=array(
                        'heading'=>$heading,
                    	'timing_details'=>$timing_details,
                    	'details'=>$details,
                    );
                   $this->db->where("id",$id);
                   $update=$this->db->update('events_admin_part_seconds', $updateArr);
                 

                }   
                if($update){
                    return $this->load->view('events_admin');
                }else{
                    echo "data not updated";
                }
	}

}


?>