<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagination_events extends CI_Controller {

   public function __construct(){

     parent::__construct();
     $this->load->helper('url');

     

   }

    public function index(){

     $this->load->view('events_admin');



    }

   public function empList(){

     // POST data
     $postData = $this->input->post();

     // Get data
     
     $this->load->model('Pagination_events_model');
     $data = $this->Pagination_events_model->getEmployees($postData);

     echo json_encode($data);
  }
  public function edit_events_data($id){
    $this->load->database();
    $this->db->where('id',$id);
    $res=$this->db->get('events_admin_part_seconds');

    $data['results'] = $res->result_array();
    $this->load->view('edit_events_details',$data);
  }
  public function delete($id)
    {
       $this->load->model("Delete");
       $q=$this->Delete->delete_data($id);
       if($q==true){
         
            $this->load->view('events_admin');
    }
      else{
        echo "Error!";
      }
    }

}