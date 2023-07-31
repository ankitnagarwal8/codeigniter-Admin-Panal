<?php 
   class site_name extends CI_Controller { 
 
      public function index()
      {
         $this->load->model('site_data');

         $data['resu'] = $this->site_data->index();
         
         $this->load->view('Admin',$data);
      }
}

		 