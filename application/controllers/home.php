<?php

class home extends CI_Controller {

    public function index()
    {
        $this->load->view('Admin_home');
    }
    public function changeimg(){
        
        $text = $this->input->post('name');

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
                    'text'=>$text,
                    "bgimg"=> $data['image_metadata']['file_name']
                    );
                    $update=$this->db->update('home', $updateArr);
                    }
                }else{
                    $updateArr=array(
                        'text'=>$text
                    );
                   
                   $update=$this->db->update('home', $updateArr);
                 

                }


                if($update){
                    $this->load->model('home_data');
                    $res = $this->home_data->index();


                    $data['results'] = $res;
                    echo "<pre>";
                    print_r($data);
                    die;

                    $this->load->view('index.php',$data);
                    
                    
                }else{
                    echo "data not updated";
                }
    }

    
}