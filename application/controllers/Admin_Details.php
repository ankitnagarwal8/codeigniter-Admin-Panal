<?php

class Admin_Details extends CI_Controller {

    public function index($id)
    {

        $name= $this->input->post('name');
        $email=$this->input->post('email');
        $mnum=$this->input->post('mnum');
        $pass=$this->input->post('password');

        $pass1= md5($pass);


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
                    'password'=>$pass1,
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
                        'password'=>$pass1
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
   
    public function updatepass($id){

        $oldpass=$this->input->post('oldpass');
        $newpass=$this->input->post('newpass');

        $newpass1=md5($newpass);
        $oldpass1=md5($oldpass);
        $this->load->model('Admin_data');
        $pass = $this->Admin_data->match_old_pass($oldpass1);
        
        if($pass===true)
        {
            $this->load->model('Admin_data');
            $res= $this->Admin_data->updating($newpass1);

            if($res){
                $this->load->model('Admin_data');
                $results = $this->Admin_data->get_admin_data($id);
                $data["results"] = $results;

                $this->load->model('site_data');
                $data['datas4'] = $this->site_data->index();

                $this->load->view('Admin_Details', $data);
            }else{
                echo "data not updated";
            }
            

        }else{
            echo "please enter corret old pass";
        }

    }

    

    
}
?>