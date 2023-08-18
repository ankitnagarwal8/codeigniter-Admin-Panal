<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sendmultiplemail extends CI_Controller {

    public function index(){
        $this->load->model('site_data');
        $data['datas4'] = $this->site_data->index();


    	$this->load->view('product',$data);
    }
    public function send(){
        $email = $this->input->post('email');
        $name = $this->input->post('name');

        $Arr = array(
            'email'=>$email,
            'name'=>$name
        );

        $this->load->database();
        $insert = $this->db->insert('send_mail',$Arr);
        if(!$insert){
            echo "data inserted";
        }else{
            $this->index();
        }
    }
    public function emailList(){

     // POST data
     $postData = $this->input->post();

     // Get data
     
     $this->load->model('email_pagenation');
     $data = $this->email_pagenation->getEmployees($postData);

     echo json_encode($data);
  }
  public function delete($id)
    {
        $this->load->database();
        $this->db->where("id", $id);
        $q = $this->db->delete("send_mail");
      
       if($q){
         
            $this->index();
    }
      else{
        echo "Error!";
      }
    }

    public function send_email_with_photo() {

        
        $sell_contant = $this->input->post('sell_contant');
        $Product_details = $this->input->post('Product_details');
        $logo = $this->input->post('logo');
        $product_image = $this->input->post('product_image');
        /*print_r($logo);
        print_r($product_image);
        die;
*/

                $config['upload_path']   = base_url('../photos/'); 
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = 2048; 
                $this->load->library('upload', $config);
                print_r($config['upload_path']);
                die;

                if (!$this->upload->do_upload('logo') || !$this->upload->do_upload('product_image')) {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                } else {
                        $data1 = $this->upload->data('logo');
                        $data2 = $this->upload->data('product_image');
                        
    
                    $Arr = array(
                        'logo'=>$data1,
                        'sell_details'=>$sell_contant,
                        'product_image'=>$data2,
                        'Product_details'=>$Product_details
                    );
                    $this->load->database();
                    $insert = $this->db->insert('add_create',$Arr);
                    if($insert){
                        echo 'data inserted';
                    }


                }
            
        }

}


