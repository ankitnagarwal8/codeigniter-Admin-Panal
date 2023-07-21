
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagination_course_model extends CI_Model {

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
        $searchQuery = " (coursename like '%".$searchValue."%' or courseprice like '%".$searchValue."%' or coursepart like'%".$searchValue."%' ) ";
     }

     ## Total number of records without filtering
     $this->db->select('count(*) as allcount');
     $records = $this->db->get('admin_course_part2')->result();
     $totalRecords = $records[0]->allcount;

     ## Total number of record with filtering
     $this->db->select('count(*) as allcount');
     if($searchQuery != '')
        $this->db->where($searchQuery);
     $records = $this->db->get('admin_course_part2')->result();
     $totalRecordwithFilter = $records[0]->allcount;

     ## Fetch records
     $this->db->select('*');
     if($searchQuery != '')
     $this->db->where($searchQuery);
     $this->db->order_by($columnName, $columnSortOrder);
     $this->db->limit($rowperpage, $start);
     $records = $this->db->get('admin_course_part2')->result();

     $data = array();

     foreach($records as $record ){

        $data[] = array( 
           "coursename"=>$record->coursename,
           "coursepart"=>$record->coursepart,
           "courseprice"=>$record->courseprice,
           "text_area"=>$record->text_area,
           "photo"=>"<img style='width:100px;height:100px;' src='http://localhost/Student_Management/photos/$record->photo'>",
           "Edit"=>"<a  class='btn' href='".base_url('Admin_courses/course_edit/').$record->id."'> Edit</a>",
           "Delete"=>"<a href='".base_url('Pagination_course/delete/').$record->id."'>Delete</a>"
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