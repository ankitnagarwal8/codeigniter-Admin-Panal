<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	
	public function Registration()
	{
		$this->load->view('Registration_form');
	}
	public function signup()
	{
		$name=$this->input->post("name");
		$fname=$this->input->post("fathername");
		$DOB=$this->input->post("DOB");
		$add=$this->input->post("personaladdress");
		$sex=$this->input->post("sex");
		$course=$this->input->post("Course");
		$city=$this->input->post("City");	
		$district=$this->input->post("District");
		$state=$this->input->post("State");
		$pin=$this->input->post("pincode");
		$email=$this->input->post("emailid");
		$mnum=$this->input->post("mobileno");

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
				  $this->load->model("registration");
                  $insert_data = $this->registration->reg($name,$fname,$DOB,$add,$sex,$course,$city,$district,$state,$pin,$email,$mnum,$data);

                  $this->session->set_flashdata('message', 'Successfully Added.');
                  	
                  if($insert_data === true){
                  	$this->Registration();
                  }else{
                  	echo "data not inserted!";
                  }
           

            
        }
    }

  


}

?>