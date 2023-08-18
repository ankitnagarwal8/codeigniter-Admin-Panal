<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class email_pagenation extends CI_Model {

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
        $searchQuery = " (id like '%".$searchValue."%' or email like '%".$searchValue."%' or name like'%".$searchValue."%' ) ";
     }

     ## Total number of records without filtering
     $this->db->select('count(*) as allcount');
     $records = $this->db->get('send_mail')->result();
     $totalRecords = $records[0]->allcount;

     ## Total number of record with filtering
     $this->db->select('count(*) as allcount');
     if($searchQuery != '')
        $this->db->where($searchQuery);
     $records = $this->db->get('send_mail')->result();
     $totalRecordwithFilter = $records[0]->allcount;

     ## Fetch records
     $this->db->select('*');
     if($searchQuery != '')
        $this->db->where($searchQuery);
     $this->db->order_by($columnName, $columnSortOrder);
     $this->db->limit($rowperpage, $start);
     $records = $this->db->get('send_mail')->result();

     $data = array();

     foreach($records as $record ){

        $data[] = array( 
           "email"=>$record->email,
           "name"=>$record->name,
           "Delete"=>"<a href='".base_url('sendmultiplemail/delete/').$record->id."'>Delete</a>"
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