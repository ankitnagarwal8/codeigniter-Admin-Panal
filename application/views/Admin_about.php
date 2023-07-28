
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GeeksForGeeks</title>
	<link rel="stylesheet" href="http://localhost/Student_Management/assets/css/adminstyle.css">

	<style type="text/css">
		*{
			padding: 0;
			margin: 0;
		}
		.home_section{
			text-align: center;
			border:2px solid black;
			margin-top: 2rem;
			
		}
		.home_form{
			padding:2rem;
			
			width: 100%;
		}
		input[type="text"]{
      		width: 100%;
  			max-width: 600px;
            height: 45px;
            padding: 12px;
            border: 1.5px solid lightgrey;
            outline: none;
            transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
            box-shadow: 0px 0px 20px -18px;
            margin: 1rem;

          }
          .form_feilds{
          	width: 50%;
          	display: flex;
          }
          .home_form .col{
          	margin-left: 1rem;
          	text-align: center;
          	width: 50%;
          }
          textarea{
          	width: 100%;
  			max-width: 600px;
            height: 100px;
            padding: 12px;
            border-radius: 12px;
            border: 1.5px solid lightgrey;
            outline: none;
            transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
            box-shadow: 0px 0px 20px -18px;
            margin: 1rem;
          }



	</style>
	
</head>

<body>

	
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
						<h3><a href="">Settings</a></h3>
					</div>

					<div class="nav-option logout">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png" class="nav-img" alt="logout">
						<h3><a href="<?= base_url('Logout');?>">Logout</a></h3>
					</div>

				</div>
			</nav>
		</div>
		<div class="main">
			<div class="home_section" >
				<div class="home">
				<h1>About Part 1</h1>
				</div>
				<form method="post" action="<?= base_url('admin_About/About_part1');?>" enctype="multipart/form-data">
				<?php  
				foreach($results as $result):
				?>	
					
				 
				<div class="home_form">
				  <div class="row form_feilds" style="display: flex;" >
  					<div class="col">
   						 <input type="text" name="frist_h1" value="<?php echo $result['text']; ?>" class="form-control" placeholder="frist_h1" aria-label="First name">
  					</div>
  					<div class="col">
    					<textarea name = "text_area"><?php echo $result['text_box']; ?></textarea>
  					</div>
				  </div>
				 
				  <div class="row form_feilds"  style="display: flex;" >
  					<div class="col">
   						 <button type="submit">update</button>
  					</div>  					
				  </div>
				 </div>
				</form>
			 </div>
<?php  endforeach;?>

			 <div class="home_section" >
				<div class="home">
				<h1>About Part 2</h1>
				</div>
				<form method="post" action="<?= base_url('admin_About/About_part2');?>" enctype="multipart/form-data">
<?php foreach($results2 as $result2): ?>
					
				 
				<div class="home_form">
				  <div class="row form_feilds" style="display: flex;" >
  					<div class="col">
   						 <input type="text" name="heading_forth" value="<?php echo $result2['heading_forth'] ?>" class="form-control" placeholder="heading_forth" aria-label="First name">
  					</div>
  					<div class="col">
    					<input type="text" name="heading_frist" value="<?php echo $result2['heading_frist'] ?>" class="form-control" placeholder="heading_frist" aria-label="First name">
  					</div>
				  </div>
				  
				  <div class="row form_feilds" style="display: flex;" >
  					<div class="col">
   						 <input type="text" name="name" value="<?php echo $result2['name']; ?>" class="form-control" placeholder="name" aria-label="First name">
  					</div>
  					<div class="col">
    					<input type="text" name="post" value="<?php echo $result2['post']; ?>" class="form-control" placeholder="post" aria-label="First name">
  					</div>
  				</div>
				
				  <div class="row form_feilds"  style="display: flex;" >
				  	<div class="col">
    					<textarea name="text_area"><?php echo $result2['saying	']; ?></textarea>
  					</div>
  					<div class="col">
   						 <button type="submit">update</button>
  					</div>  					
				  </div>
				 </div>
				</form>
			 </div>

		<?php endforeach;?>	 






			</div>
		</div>
	</div>

	<script src="http://localhost/Student_Management/assets/js/index.js"></script>






</body>
</html>
