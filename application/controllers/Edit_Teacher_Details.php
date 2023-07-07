<?php

class Edit_Teacher_Details extends CI_Controller {
  public function index($id){

    $this->load->model('Edit_Teacher_data');
    $results= $this->Edit_Teacher_data->get_profile_edit_data($id);
    
      $this->load->view('Edit_Teacher_Details',compact("results"));
  }
  public function edit_details($id){

        $name=$this->input->post("name");
        $post=$this->input->post("post");
        $salary=$this->input->post("salary");
        $mnum=$this->input->post("number");
    


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
                    'name'=>$name,
                    'post'=>$post,
                    'salary'=>$salary,
                    'mobile_number'=>$mnum,
                    "photo"=> $data['image_metadata']['file_name']
                    );
                     $this->db->where("id",$id);
                    $update=$this->db->update('teachers_data', $updateArr);
                    }
                }else{
                    $updateArr=array(
                        'name'=>$name,
                        'post'=>$post,
                        'salary'=>$salary,
                        'mobile_number'=>$mnum
                    );
                   $this->db->where("id",$id);
                   $update=$this->db->update('teachers_data', $updateArr);
                 

                }   
                if($update){
                    return $this->load->view('Teacheres_Datails');
                }else{
                    echo "data not updated";
                }
  }







}