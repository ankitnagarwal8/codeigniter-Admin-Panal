 
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GeeksForGeeks</title>
	<link rel="stylesheet" href="http://localhost/Student_Management/assets/css/adminstyle.css">
	<style>
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
			box-shadow: 5px 5px 5px 5px #888888;}
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
		input[type='file']{
			margin: 1rem;
			height: 3rem;
			width:17rem;
			border-radius: 3rem;
			border: none;
			text-align: center;
			background-color: #E7B6F3;
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
		.password input[type='submit']{
			background-color: #999999;
		}
		.password input{
			margin: 1rem;
			height: 3rem;
			width:17rem;
			border-radius: 3rem;
			border: none;
			text-align: center;
			background-color: #E7B6F3;

		}
		.password button{
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

	<!-- for header part -->
	<header>

		<div class="logosec">
			<div class="logo">W3School</div>
			<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png" class="icn menuicn" id="menuicn" alt="menu-icon">
		</div>

		<div class="searchbar">
			<input type="text" placeholder="Search">
			<div class="searchbtn">
			<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png" class="icn srchicn" alt="search-icon">
			</div>
		</div>

		<div class="message">
			<div class="circle"></div>
			<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"class="icn" alt="">
			<div class="dp">
			<img src= "https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png" class="dpicn" alt="dp">
			</div>
		</div>

	</header>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
					<div class="nav-option option1">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png" class="nav-img" alt="dashboard">
						<h3><a href="<?= base_url('Login');?>"> Dashboard</a></h3>
					</div>

					<div class="option2 nav-option">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png" class="nav-img" alt="articles">
						<h3><a href="<?= base_url('Pagination'); ?>"> Students</a></h3>
					</div>

					<div class="nav-option option3">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png" class="nav-img" alt="report">
						<h3>
							<a href="<?= base_url('home'); ?>">Home</a>
						</h3>
					</div>
					<div class="nav-option option3">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png" class="nav-img" alt="report">
						<h3>
							<a href="<?= base_url('admin_About');?>">About</a>
						</h3>
					</div>
					<div class="nav-option option3">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png" class="nav-img" alt="report">
						<h3>
							<a href="<?= base_url('Admin_courses');?>">Course</a>
						</h3>
					</div>
					<div class="nav-option option3">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png" class="nav-img" alt="report">
						<h3>
							<a href="<?= base_url('admin_trainers');?>">Trainer</a>
						</h3>
					</div>
					<div class="nav-option option3">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png" class="nav-img" alt="report">
						<h3>
							<a href="<?= base_url('events_admin');?>">Events</a>
						</h3>
					</div>
					<div class="nav-option option3">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png" class="nav-img" alt="report">
						<h3>
							<a href="<?= base_url('Pricing_admin');?>">Pricing</a>
						</h3>
					</div>
					<div class="nav-option option3">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png" class="nav-img" alt="report">
						<h3>
							<a href="<?= base_url('Admin_contact')?>">Contact</a>
						</h3>
					</div>

					<div class="nav-option option4">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png" class="nav-img" alt="institution">
						<h3><a href="<?= base_url('Teacher') ?>"> Teacher</a></h3>
					</div>

					<div class="nav-option option5">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png" class="nav-img" alt="blog">
						<h3><a href="<?= base_url('Login/Admin_data'); ?>"> Admin Details</a></h3>
					</div>

					<div class="nav-option option6">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png" class="nav-img" alt="settings">
						<h3><a href=""> Settings</a></h3>
					</div>

					<div class="nav-option logout">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png" class="nav-img" alt="logout">
						<h3><a href="<?= base_url('Logout');?>">Logout</a></h3>
					</div>

				</div>
			</nav>
		</div>
		<?php
			foreach($results as $result):

		?>
		<div class="main">
			 <div class="Admin_details">
			   <form method="post" action="<?= base_url('Admin_Details/index/'.$result['id']) ?>" enctype="multipart/form-data">	
			 	<div class="Admin_details_heading">
			 	 <h3>Admin Details</h3>
			 	</div>
			 	<div class="Admin_image">
			 		<div class="Admin_image_">
			 			<img src="http://localhost/Student_Management/photos/<?php echo $result['image']; ?> ?>" name="image">
			 		</div>
			 	<div class="Admin_basic_details">
			 		<input type="text" name="name" value="<?php echo $result['name']; ?>"><input type="email" name="email" value="<?php echo $result['email']; ?>">
			 		<br>
			 		<br>
			 		<input type="number" name="mnum" value="<?php echo $result['mobile']; ?>">
			 		<input type="file" name="image">
			 		<button type="submit">update</button>
			 	</div>
			 </div><?php
			 endforeach;
			?>
			</form>
			 </div>
			 <div class="password">
			 	<form method="post" action="<?= base_url('Admin_Details/updatepass/'.$result['id']);?>">
			 		<input type="password" name="oldpass" placeholder="Old Password"><input type="password" name="newpass" placeholder="New Password"><br>
			 		<input type="submit" name="submit">
			 	</form>
			 	
			 </div>

		</div>
	</div>

	<script src="http://localhost/Student_Management/assets/js/index.js"></script>
</body>
</html>
