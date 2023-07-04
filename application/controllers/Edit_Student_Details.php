<?php

class Edit_Student_Details extends CI_Controller {
	public function index($id){
		$results= $this->Edit_Student_data->get_profile_edit_data($id);
		
    	$this->load->view('Edit_Student_Details',compact("results"));
	}
	public function Edit_Student_Data($id){
	
        
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
                    'student_name'=>$name,
                    'father_name'=>$fname,
                    'dob'=>$DOB,
                    'address'=>$add,
                    'sex'=>$sex,
                    'course'=>$course,
                    'city'=>$city,
                    'district'=>$district,
                    'state'=>$state,
                    'pincide'=>$pin,
                    'email'=>$email,
                    'mobile_number'=>$mnum,
                    "photo"=> $data['image_metadata']['file_name']
                    );
                     $this->db->where("id",$id);
                    $update=$this->db->update('students_data', $updateArr);
                    }
                }else{
                    $updateArr=array(
                        'student_name'=>$name,
                    	'father_name'=>$fname,
                    	'dob'=>$DOB,
                    	'address'=>$add,
                    	'sex'=>$sex,
                    	'course'=>$course,
                    	'city'=>$city,
                    	'district'=>$district,
                    	'state'=>$state,
                    	'pincide'=>$pin,
                    	'email'=>$email,
                    	'mobile_number'=>$mnum
                    );
                   $this->db->where("id",$id);
                   $update=$this->db->update('students_data', $updateArr);
                 

                }   
                if($update){
                    return $this->load->view('Student_Details');
                }else{
                    echo "data not updated";
                }
       

    }

  /* public function delete($id){
         $this->load->model("delete");
         $q=$this->delete->delete($id);
         $this->load->view('Student_Details');
         
    } */  
	}
