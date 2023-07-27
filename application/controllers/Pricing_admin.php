<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pricing_admin extends CI_Controller {

	public function index()
	{
		$this->load->view('Pricing_admin');
	}
	public function Pricing_part1(){
		$heading = $this->input->post('heading');
		$paragraph = $this->input->post('paragraph');
		$Arr = array(
			'heading'=>$heading,
			'paragraph'=>$paragraph
		);
		$this->load->database();

		$query = $this->db->update('Pricing_part_frist',$Arr);

		if($query){
			$this->load->view('Pricing_admin');
		}
	}


	public function empList(){

     // POST data
     $postData = $this->input->post();

     // Get data
     
     $this->load->model('Pricing_data');
     $data = $this->Pricing_data->getEmployees($postData);

     echo json_encode($data);
  }
  public function delete($id)
    {
       $this->load->model("Delete_pricing");
       $q=$this->Delete_pricing->delete_data($id);
       if($q==true){
         
            $this->load->view('Pricing_admin');
    }
      else{
        echo "Error!";
      }
    }
   public function add_pricing_data(){
   	$this->load->view('Add_pricing');
   }
   public function add_pricing_data2(){
   		$user = $this->input->post('user');
   		$pricing = $this->input->post('pricing');
   		$s_frist = $this->input->post('s_frist');
   		$s_second = $this->input->post('s_second');
   		$s_third = $this->input->post('s_third');
   		$s_forth = $this->input->post('s_forth');
   		$s_fifth = $this->input->post('s_fifth');
   		$button = $this->input->post('button');

   		$Arr = array(
   			'user'=>$user,
   			'pricing'=>$pricing,
   			's_frist'=>$s_frist,
   			's_second'=>$s_second,
   			's_third'=>$s_third,
   			's_forth'=>$s_forth,
   			's_fifth'=>$s_fifth,
   			'button'=>$button
   		);
   		$this->load->database();
   		$query = $this->db->insert('pricing_part_second',$Arr);
   		if($query){
   			$this->load->view('Pricing_admin');
   		}
   }
   public function edit_data($id){
   		$this->load->database();
   		$this->db->where('id',$id);
   		$q = $this->db->get('pricing_part_second');
   		$res = $q->result_array();

   		$data['results'] = $res; 

   		$this->load->view('update_pricing',$data);
   }
   public function update_pricing_data2($id){
   		$user = $this->input->post('user');
   		$pricing = $this->input->post('pricing');
   		$s_frist = $this->input->post('s_frist');
   		$s_second = $this->input->post('s_second');
   		$s_third = $this->input->post('s_third');
   		$s_forth = $this->input->post('s_forth');
   		$s_fifth = $this->input->post('s_fifth');
   		$button = $this->input->post('button');

   		$Arr = array(
   			'user'=>$user,
   			'pricing'=>$pricing,

   			's_frist'=>$s_frist,
   			's_second'=>$s_second,
   			's_third'=>$s_third,
   			's_forth'=>$s_forth,
   			's_fifth'=>$s_fifth,
   			'button'=>$button
   		);
   		$this->load->database();
   		$this->db->select('*');
   		$this->db->from('pricing_part_second');
   		$this->db->where('id',$id);
   		$query = $this->db->update('pricing_part_second',$Arr);
   		if($query){
   			$this->load->view('Pricing_admin');
   		}
   }
}
?>