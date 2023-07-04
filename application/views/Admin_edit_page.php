<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.container{
			text-align: center;
		}
		.heading{
			font-size: 4rem;
		}
		.main{
			text-align: center;
		}
		.Admin_details_heading{
			font-size: 2rem;
		}
		.Admin_image{
			color:green;
			display: flex;
			padding: 2rem;
		}
		.Admin_image img{
			height:20rem;
			width:20rem;
			border-radius: 50%;
			box-shadow: 5px 5px 5px 5px #888888;		}
		.Admin_basic_details{
			padding: 4rem;
		}
		.Admin_basic_details input{
			margin: 1rem;
			height: 3rem;
			width:17rem;
			border-radius: 3rem;
			border: none;
			text-align: center;
			background-color: #E7B6F3;

		}
		input[type='submit']{
			background-color: #999999;
		}
		button{
			background-color: #999999;
			margin: 1rem;
			height: 3rem;
			width:17rem;
			border-radius: 3rem;
			border: none;
			text-align: center;
		}


	</style>
</head>
<body>
	<div class="container">
		<div class="heading">Edit Admin details</div>
		<div class="userdata">
			<div class="Admin_details">
			   <form method="post" action="<?= base_url('Admin_Details/Admin_data_edit'); ?>" enctype="multipart/form-data">	
			 	
			 	<div class="Admin_image">
			 		<div class="Admin_image_">
			 			<img src="http://localhost/Student_Management/assets/images/c9.jpg">
			 		</div>
			 	<div class="Admin_basic_details">
			 		<input type="text" value=""><input type="email" value="">
			 		<br>
			 		<br>
			 		<input type="number" name="mnum" value=""><input type="text" name="password" value="">
			 		<button type="submit">update</button>


			 	</div>
			 </div>
			</form>
			 </div>
		</div>
		
	</div>

</body>
</html>