<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {

	public function index(){
        $this->load->model('site_data');
        $data['datas4'] = $this->site_data->index();
		$this->load->view('Teacheres_Datails',$data);
	}
	public function Registration(){
		$this->load->view('Add_Teacher_Details');
	}

	public function add(){
		$name=$this->input->post("name");
		$post=$this->input->post("post");
		$salary=$this->input->post("salary");
		$mnum=$this->input->post("number");

		$config['upload_path'] = './photos/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 20000;
        $config['max_width'] = 15000;
        $config['max_height'] = 15000;

        $this->load->library('upload', $config);

        $this->upload->initialize($config);
        $image=$this->upload->do_upload('image');
        
        if (!$image) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
             

        }
        else{
            $data = array(
            	'image_metadata' => $this->upload->data()
            );
				  $this->load->model("Teacher_data");
                  $this->Teacher_data->reg($name,$post,$salary,$mnum,$data);
           

            
        }
	}

    public function empList(){

     // POST data
     $postData = $this->input->post();


     // Get data
     
     $this->load->model('Teacher_Data_Show');
     $data = $this->Teacher_Data_Show->getEmployees($postData);


     echo json_encode($data);
  		}


  	public function delete($id)
    {
       $this->load->model("Teacher_Data_Delete");
       $q=$this->Teacher_Data_Delete->delete($id);
       if($q==true){
         
            $this->load->view('Teacheres_Datails');
    }
      else{
        echo "Error!";
      }
    }
    







	}