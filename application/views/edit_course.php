<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="http://localhost/Student_Management/assets/css/adminstyle.css">


	<style>
		.home_section{
			border:1px solid lightgrey;
			height:auto;
			width:100%;
			background-color: #fffddd;
		}
		.home{
			height:5rem;
			width:100%;
			text-align: center;
			color:lightblue;
		}
		.home_form{
			
		}
		.form_feilds{
			padding: 6vh;
			width:100%;
		}
		.form_feilds input{
			height: 10vh;
			width:90%;
			border: none;
			border-radius: 1rem;
			text-align: center;
			background-color: #F7F6F1;
			font-size:1.5rem;
		}
		textarea{

			border: none;
			border-radius: 1rem;
			text-align: center;
			background-color: #F7F6F1;
			font-size:1.5rem;
		}
		.cloumn_feild{
			width:50%;
		}
		button{
			 color: #ffffff;
  			 background-color: #987B57;
             border-radius: 8px;
             padding: 9px 18px;
             border:none;
             display: inline-block;
             font-family: "Lucida Console", Monaco, 
		}

	</style>
	
</head>
<body>
	<div class="home_section" >
				<div class="home">
				<h1>course Part 2</h1>
				</div>
				<?php foreach($results as $result): ?>
				<form method="post" action="<?= base_url('Admin_courses/course_edit_data/'.$result['id']);?>" enctype="multipart/form-data">
				<div class="home_form">
				  <div class="row form_feilds" style="display: flex;" >
  					<div class="col cloumn_feild">
   						 <input type="text" name="coursename" value="<?php echo $result['coursename'];?>" class="form-control" placeholder="coursename" aria-label="First name">
  					</div>
  					<div class="col cloumn_feild">
   						 <input type="text" name="course_part" class="form-control" placeholder="course_part" value="<?php echo $result['coursepart'];?>" aria-label="First name">
  					</div>
  					
				  </div>
				  <div class="row form_feilds" style="display: flex;" >
  					<div class="col cloumn_feild">
   						 <input type="text" name="course_price" class="form-control" value="<?php echo $result['courseprice'];?>" placeholder="course_price" aria-label="First name">
  					</div>
  					<div class="col cloumn_feild">
   						 <input type="file" name="image" class="form-control" placeholder="" aria-label="First name">
  					</div>
  					
				  </div>
				 
				  <div class="row form_feilds"  style="display: flex;" >
				  	<div class="col cloumn_feild">
    					<textarea name = "text_area" value="<?php echo $result['text_area'];?>" placeholder=" text area"></textarea>
  					</div>
  					<div class="col cloumn_feild">
   						 <button type="submit">update</button>
  					</div>  					
				  </div>
				 </div>
				</form>
			<?php  endforeach; ?>
			 </div>

</body>
</html>