
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagination_course extends CI_Controller {

   public function __construct(){

     parent::__construct();
     $this->load->helper('url');

     

   }

    public function index(){

     $this->load->view('Admin_course');



    }

   public function empList(){

     // POST data
     $postData = $this->input->post();

     // Get data

     $this->load->model('Pagination_course_model');
     $data = $this->Pagination_course_model->getEmployees($postData);

     echo json_encode($data);
  }
  public function delete($id)
    {
       $this->load->model("course_delete");
       $q=$this->course_delete->delete_data($id);
       if($q==true){
         
            $this->load->view('Admin_course');
    }
      else{
        echo "Error!";
      }
    }

}
