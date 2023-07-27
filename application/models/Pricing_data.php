<?php
class Pricing_data extends CI_Model 
{
	function index()
	{

		$this->load->database();
		$q=$this->db->query("select * from pricing_part_frist");
		
		return $q->result_array();
	}
	function part2()
	{

		$this->load->database();
		$q=$this->db->query("select * from pricing_part_second");
		
		return $q->result_array();
	}
	


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
        $searchQuery = " (user like '%".$searchValue."%' or s_frist like '%".$searchValue."%' or s_fifth like'%".$searchValue."%' ) ";
     }

     ## Total number of records without filtering
     $this->db->select('count(*) as allcount');
     $records = $this->db->get('pricing_part_second')->result();
     $totalRecords = $records[0]->allcount;

     ## Total number of record with filtering
     $this->db->select('count(*) as allcount');
     if($searchQuery != '')
        $this->db->where($searchQuery);
     $records = $this->db->get('pricing_part_second')->result();
     $totalRecordwithFilter = $records[0]->allcount;

     ## Fetch records
     $this->db->select('*');
     if($searchQuery != '')
        $this->db->where($searchQuery);
     $this->db->order_by($columnName, $columnSortOrder);
     $this->db->limit($rowperpage, $start);
     $records = $this->db->get('pricing_part_second')->result();

     $data = array();

     foreach($records as $record ){

        $data[] = array( 
           "user"=>$record->user,
           "pricing"=>$record->pricing,
           "s_frist"=>$record->s_frist,
           "s_second"=>$record->s_second,
           "s_third"=>$record->s_third,
           "s_forth"=>$record->s_forth,
           "s_fifth"=>$record->s_fifth,
           "button"=>$record->button,
           "Edit"=>"<a  class='btn' href='".base_url('Pricing_admin/edit_data/').$record->id."'> Edit</a>",
           "Delete"=>"<a href='".base_url('Pricing_admin/delete/').$record->id."'>Delete</a>"
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