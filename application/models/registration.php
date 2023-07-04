<?php
	class registration extends CI_Model 
	{
		function reg($name,$fname,$DOB,$add,$sex,$course,$city,$district,$state,$pin,$email,$mnum,$data)
		{
			$con = $this->load->database('project2');
			$insertArr=array(
	                 "student_name"=>$name,
	                 "father_name"=>$fname,
	                 "dob"=>$DOB,
	                 "address"=>$add,
	                 "sex"=>$sex,
	                 "course"=>$course,
	                 "city"=>$city,
	                 "district"=>$district,
	                 "state"=>$state,
	                 "pincide"=>$pin,
	                 "email"=>$email,
	                 "mobile_number"=>$mnum,
					 "photo"=> $data['image_metadata']['file_name']
            );
            
        $response=  $this->db->insert('students_data',$insertArr);
			if($response)
			{

        			$this->load->view("index");	
					
			}
			else
				{
        			echo "Query failed!";
  			}
		}
	}

?>
