<?php

class Admin_site_name extends CI_Controller {

    public function index()
    {
        $this->load->model('site_data');
        $data['datas4'] = $this->site_data->index();
        $this->load->view('Admin_details_data',$data);
       
    }
    public function update_name(){

        $name= $this->input->post('site_name');
        $updateArr = array(
            "site_name"=>$name
        );
        $this->load->database();
        $update = $this->db->update("site_name",$updateArr);
        if($update){
            $this->index();
        }
    }
}