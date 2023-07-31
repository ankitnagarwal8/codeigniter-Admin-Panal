


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

                    $this->load->model('Basic_Data');
                    $countalldata['data'] = $this->Basic_Data->record_count();


                    $this->load->model('Basic_Data');
                    $countalldata['data2'] = $this->Basic_Data->record_count_teacher();

                    $this->load->model('Basic_Data');
                    $countalldata['data3'] = $this->Basic_Data->record_count_course();

                    $this->load->model('site_data');

                    $countalldata['datas4'] = $this->site_data->index();



                    $this->load->view('Admin',$countalldata);
                      
                   }
		                 else{
			      
                             $this->load->view('login'); 
                         
		            }
                }
        }

        public function Admin_data()
        {
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
                $results['results'] = $this->Admin_data->index($id);



                $this->load->model('site_data');
                $results['datas4'] = $this->site_data->index();

                $this->load->view('Admin_Details',$results);


        }


        
}