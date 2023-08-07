<?php 
   class Email_controller extends CI_Controller { 
 
      public function send_mail() {
/*
         include('PHPMailer\PHPMailer\PHPMailer');
         include('PHPMailer\PHPMailer\SMTP');
         include('PHPMailer\PHPMailer\Exception');


         require 'vendor/autoload.php';
*/
         $name = $this->input->post('name');
         $to_email = $this->input->post('email');
         $from_email = 'ankitnagarwal5@gmail.com';
         $subject = $this->input->post('subject');
         $massage = $this->input->post('message'); 
        
         /*$config = array(
                      'protocol' => 'smtp',
                      'smtp_host' => 'localhost',
                      'smtp_port' => 587,
                      'smtp_user' => 'ankitnagarwal5@gmail.com',
                      'smtp_pass' => 'fdnojlihvgexyhvq',
                      'smtp_crypto' => 'ssl://', 
                      'mailtype' => 'html',
                      'smtp_timeout' => '4',
                      'charset' => 'utf-8',
                      'newline' => '\r\n',
                      'wordwrap' => TRUE
                  );
            $this->email->initialize($config);
            $this->email->set_mailtype("html");
            $this->email->set_newline("\r\n");

            //Email content
            $htmlContent = '<h1>Sending email via SMTP server</h1>';
            $htmlContent .= '<p>This email has sent via SMTP server from CodeIgniter application.</p>';

            $this->email->to($to_email);
            $this->email->from($from_email,'MyWebsite');
            $this->email->subject($subject);
            $this->email->message($htmlContent);
            $send_mail = $this->email->send();

            if($send_mail){
               echo "mail send sucessfully";
            }else{
               echo "mail not sucessfully sended";
               print_r($this->email->print_debugger());
            }*/
            $config['protocol']    = 'smtp';
            $config['smtp_host']    = 'ssl://smtp.gmail.com';
            $config['smtp_port']    = '465';
            $config['smtp_timeout'] = '7';
            $config['smtp_user']    = 'ankitnagarwal5@gmail.com';
            $config['smtp_pass']    = 'fdnojlihvgexyhvq';
            $config['charset']    = 'utf-8';
            $config['newline']    = "\r\n";
            $config['mailtype'] = 'text'; // or html
            $config['validation'] = TRUE; // bool whether to validate email or not      

            $this->email->initialize($config);


            $this->email->from($from_email, 'ankit');
            $this->email->to($to_email); 

            $this->email->subject($subject);
            $this->email->message($massage);  

            $send_mail = $this->email->send();
            if($send_mail){
               $this->load->model('contact');
               $data['results9090'] = $this->contact->index();

               $this->load->model('site_data');
               $data['datas4'] = $this->site_data->index();

               $this->load->view('contact.php',$data);
            }else{
               echo $this->email->print_debugger();
               echo "not send mail";
            }
            
         
      } 
   } 
?>