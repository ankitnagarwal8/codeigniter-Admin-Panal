<?php

class home extends CI_Controller {

    public function index()
    {
        $this->load->model('Admin_home_data');
        $data['results'] = $this->Admin_home_data->homepartfrist();
        $data['results2'] = $this->Admin_home_data->homepartsecond();
        $data['results3'] = $this->Admin_home_data->homepartthird();
        $this->load->view('Admin_home',$data);
    }
    public function changeimg(){
        
        $paragraph_h2 = $this->input->post('paragraph_h2');
        $heading_frist = $this->input->post('frist_h1');
        $heading_second = $this->input->post('frist_h2');

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
                    'text'=>$paragraph_h2,
                    'heading_frist'=>$heading_frist,
                    'heading_second'=>$heading_second,
                    "bgimg"=> $data['image_metadata']['file_name']
                    );
                    $update=$this->db->update('home', $updateArr);
                    }
                }else{
                    $updateArr=array(
                        'text'=>$paragraph_h2,
                        'heading_frist'=>$heading_frist,
                        'heading_second'=>$heading_second
                    );
                   
                   $update=$this->db->update('home', $updateArr);
                 

                }


                if($update){
                    
                    $this->index();
                   
                }else{
                    echo "data not updated";
                }
    }

    public function home_part2(){
       $heading = $this->input->post('frist_h1');
       $p1 = $this->input->post('p1');
       $list1 = $this->input->post('list1');
       $list2 = $this->input->post('list2');
       $list3 = $this->input->post('list3');
       $p2 = $this->input->post('p2');

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
                    'paragraph_frist'=>$p1,
                    'list_frist'=>$list1,
                    'list_second'=>$list2,
                    'list_third'=>$list3,
                    'paragraph_second'=>$p2,
                    "image"=> $data['image_metadata']['file_name']
                    );
                    $update=$this->db->update('home_part_2', $updateArr);
                    }
                }else{
                    $updateArr=array(
                        'heading'=>$heading,
                    'paragraph_frist'=>$p1,
                    'list_frist'=>$list1,
                    'list_second'=>$list2,
                    'list_third'=>$list3,
                    'paragraph_second'=>$p2
                    );
                   
                   $update=$this->db->update('home_part_2', $updateArr);
                 

                }


                if($update){
                     $this->index();
                   
                }else{
                    echo "data not updated";
                }

    }

     public function home_part3(){

        $heading_frist = $this->input->post('heading_frist');
        $paragraph_frist = $this->input->post('paragraph_frist');
        $servies_frist_heading = $this->input->post('servies_frist_heading');
        $servies_frist_paragraph = $this->input->post('servies_frist_paragraph');
        $servies_second_heading = $this->input->post('servies_second_heading');
        $servies_second_paragraph = $this->input->post('servies_second_paragraph');
        $servies_third_heading = $this->input->post('servies_third_heading');
        $servies_third_paragraph = $this->input->post('servies_third_paragraph');

        $updateArr=array(
                    'heading_frist'=>$heading_frist,
                    'paragraph_frist'=>$paragraph_frist,
                    'servies_frist_heading'=>$servies_frist_heading,
                    'servies_frist_paragraph'=>$servies_frist_paragraph,
                    'servies_second_heading'=>$servies_second_heading,
                    'servies_second_paragraph'=>$servies_second_paragraph,
                    'servies_third_heading'=>$servies_third_heading,
                    'servies_third_paragraph'=>$servies_third_paragraph,
                    
                    );
        $this->load->database();
        $update=$this->db->update('home_part_3', $updateArr);

         if($update){
             $this->index(); 
         }else{
           echo "data not updated";
        }


     }



   


    
}