<?php
	class Teacher_data extends CI_Model 
	{
		function reg($name,$post,$salary,$mnum,$data)
		{
			$con = $this->load->database('project2');
			$insertArr=array(
	                 "name"=>$name,
	                 "post"=>$post,
	                 "salary"=>$salary,
	                 "mobile_number"=>$mnum,
					 "photo"=> $data['image_metadata']['file_name']
            );
            
        $response=  $this->db->insert('teachers_data',$insertArr);
			if($response)
			{

        		$this->load->view('Teacheres_Datails');
					
			}
			else
				{
        			echo "Query failed!";
  			}
		}
	}

?>
