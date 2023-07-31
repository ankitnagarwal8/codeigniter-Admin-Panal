<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagination extends CI_Controller {

   public function __construct(){

     parent::__construct();
     $this->load->helper('url');

     

   }

    public function index(){
       $this->load->model('site_data');

      $countalldata['datas4'] = $this->site_data->index();
     $this->load->view('Student_Details',$countalldata);



    }

   public function empList(){

     // POST data
     $postData = $this->input->post();

     // Get data
     
     $this->load->model('Pagination_model');
     $data = $this->Pagination_model->getEmployees($postData);

     echo json_encode($data);
  }
  public function delete($id)
    {
       $this->load->model("Delete");
       $q=$this->Delete->delete_data($id);
       if($q==true){
         
            $this->load->view('Student_Details');
    }
      else{
        echo "Error!";
      }
    }

}
