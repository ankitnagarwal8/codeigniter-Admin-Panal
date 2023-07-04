<?php

class Admin_Details extends CI_Controller {

    public function index($id)
    {
        
        $name= $this->input->post('name');
        $email=$this->input->post('email');
        $mnum=$this->input->post('mnum');
        $pass=$this->input->post('password');


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
                    'email'=>$email,
                    'mobile'=>$mnum,
                    'password'=>$pass,
                    "image"=> $data['image_metadata']['file_name']
                    );
                     $this->db->where("id",$id);
                    $update=$this->db->update('admin', $updateArr);
                    }
                }else{
                    $updateArr=array(
                        'name'=>$name,
                        'email'=>$email,
                        'mobile'=>$mnum,
                        'password'=>$pass
                    );
                   $this->db->where("id",$id);
                   $update=$this->db->update('admin', $updateArr);
                 

                }   
                if($update){
                    $this->load->model('Admin_data');
                    $results = $this->Admin_data->index($id);
                    $this->load->view('Admin_Details',compact("results"));
                }else{
                    echo "data not updated";
                }
       

    }
    public function Admin(){
        $this->load->model("");
        $this->load->view('Admin_Details');
    }

    

    
}
?>