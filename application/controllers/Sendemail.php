<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendemail extends CI_Controller {

    public function index(){
    	$this->load->view('sendemail');
    }

    public function send_email_with_photo() {

    	$name = $this->input->post('name');
    	$address = $this->input->post('address');
    	$programming_languages = $this->input->post('programming_languages');
    	$experience = $this->input->post('experience');
    	$mobile = $this->input->post('mobile');
         $to_email = $this->input->post('email');
         $from_email = 'ankitnagarwal5@gmail.com';
         $subject = $this->input->post('subject');
         $massage = $this->input->post('message');
         /*$files_get=$_FILES["resume"]["name"];
         if(!empty($files_get)){*/
         	$files_get=$_FILES["image"]["name"];
            
                $config['upload_path'] = './photos/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|';
                $config['max_size'] = 20000;
                $config['max_width'] = 15000;
                $config['max_height'] = 15000;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('image')) {
                    $error = array('error' => $this->upload->display_errors()); 
                    print_r($error);   
                }
                else{
                    $data = array(
                       'image_metadata' => $this->upload->data()
                    );




				$config['protocol'] = 'smtp';
				$config['smtp_host'] = 'ssl://smtp.gmail.com';
				$config['smtp_port'] = '465';
				$config['smtp_user'] = 'ankitnagarwal5@gmail.com';
				$config['smtp_pass'] = 'fdnojlihvgexyhvq';
				$config['mailtype'] = 'html';
				$config['charset'] = 'utf-8';
				$config['newline'] = "\r\n";

				$this->email->initialize($config);

				$this->email->from($from_email, 'ankit');
				$this->email->to($to_email);
				$this->email->subject('Email with Photo Attachment');
				$this->email->message('Here is a photo attachment.');

				// Path to the photo file
				$photo_path =  "http://localhost/Student_Management/photos/".$data['image_metadata']['file_name'];

			

				// Attach the photo
				$this->email->attach($photo_path);

				if ($this->email->send()) {
				 	echo 'Email sent with photo attachment.';
        		} else {
            		echo 'Error sending email: ' . $this->email->print_debugger();
        		}
        	}
    	}
	}

