
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_trainers extends CI_Controller {

	public function index()
	{
		$this->load->model('trainers_data');
		$data['results'] = $this->trainers_data->index();
		$this->load->view('Admin_trainer',$data);
	}
	public function trainer_part_frist(){
		$heading = $this->input->post('frist_h1');
		$text_area = $this->input->post('text_area');

		 $updateArr=array(
                    'heading'=>$heading,
                    'paragraph'=>$text_area
                    );
        $this->load->database();
        $update=$this->db->update('admin_traner', $updateArr);

         if($update){
            $this->index();
         }else{
           echo "data not updated";
        }
	}
}