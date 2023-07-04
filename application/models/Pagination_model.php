<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagination_model extends CI_Model {

   function getEmployees($postData=null){

     $response = array();

     ## Read value
     $draw = $postData['draw'];
     $start = $postData['start'];
     $rowperpage = $postData['length']; // Rows display per page
     $columnIndex = $postData['order'][0]['column']; // Column index
     $columnName = $postData['columns'][$columnIndex]['data']; // Column name
     $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
     $searchValue = $postData['search']['value']; // Search value

     ## Search 
     $searchQuery = "";
     if($searchValue != ''){
        $searchQuery = " (emp_name like '%".$searchValue."%' or email like '%".$searchValue."%' or city like'%".$searchValue."%' ) ";
     }

     ## Total number of records without filtering
     $this->db->select('count(*) as allcount');
     $records = $this->db->get('students_data')->result();
     $totalRecords = $records[0]->allcount;

     ## Total number of record with filtering
     $this->db->select('count(*) as allcount');
     if($searchQuery != '')
        $this->db->where($searchQuery);
     $records = $this->db->get('students_data')->result();
     $totalRecordwithFilter = $records[0]->allcount;

     ## Fetch records
     $this->db->select('*');
     if($searchQuery != '')
        $this->db->where($searchQuery);
     $this->db->order_by($columnName, $columnSortOrder);
     $this->db->limit($rowperpage, $start);
     $records = $this->db->get('students_data')->result();

     $data = array();

     foreach($records as $record ){

        $data[] = array( 
           "student_name"=>$record->student_name,
           "father_name"=>$record->father_name,
           "dob"=>$record->dob,
           "address"=>$record->address,
           "sex"=>$record->sex,
           "course"=>$record->course,
           "city"=>$record->city,
           "district"=>$record->district,
           "state"=>$record->state,
           "pincode"=>$record->pincide,
           "email"=>$record->email,
           "mobile_number"=>$record->mobile_number,
           "photo"=>"<img style='width:100px;height:100px;' src='http://localhost/Student_Management/photos/$record->photo'>",
           "Edit"=>"<a  class='btn' href='".base_url('Edit_Student_Details/index/').$record->id."'> Edit</a>",
           "Delete"=>"<a href='".base_url('Pagination/delete/').$record->id."'>Delete</a>"
        ); 
     }

     ## Response
     $response = array(
        "draw" => intval($draw),
        "iTotalRecords" => $totalRecords,
        "iTotalDisplayRecords" => $totalRecordwithFilter,
        "aaData" => $data
     );

     return $response;
   }


}