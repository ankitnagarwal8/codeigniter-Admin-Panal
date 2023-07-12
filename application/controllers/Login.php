


<?php
class Login extends CI_Controller {

        public function index()
        {
              $this->load->view('login');
              $this->load->library('session');
        }

        public function Loginfun()
        {
             $email= $this->input->post('email');
    		 $pass =  $this->input->post('password');

             $pass1 = md5($pass);



    		 $this->form_validation->set_rules($pass, 'Password', 'required');
        	 $this->form_validation->set_rules($email, 'Email', 'required');

          	 if ($this->form_validation->run() == TRUE)
                {
                        $this->load->view('login');
                }
                else
                {
              	  $this->load->model('Head_Model');

	              $result = $this->Head_Model->HOD($email,$pass1);
	
	              if($result=='true')
	              {

                     $newdata = array( 
                            'email'  => $email, 
                            'password'     => $pass, 
                            'logged_in' => TRUE
                        );  

                    $this->session->set_userdata($newdata);
                      /*$this->load->controller('Admin_Details');*/
                     $this->load->view('Admin');
                      
                   }
		                 else{
			      
                             $this->load->view('login'); 
                         
		            }
                }
        }

        public function Admin_data()
        {
            // echo md5("qwerty");  
            // 827ccb0eea8a706c4c34a16891f84e7b
            //e10adc3949ba59abbe56e057f20f883e
            
              $email = $this->session->userdata('email');
              $pass= $this->session->userdata('pass');

              $id = $this -> db
                           -> select('id')
                           -> where('email',$email,'password',$pass)
                           -> limit(1)
                           -> get('admin')
                           -> row()
                           ->id;
                $this->load->model('Admin_data');
                $results = $this->Admin_data->index($id);

                $this->load->view('Admin_Details',compact("results"));


        }


        
}