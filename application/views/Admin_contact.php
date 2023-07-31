
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
		<?php foreach($datas4 as $data4): ?>
		<div class="logosec">
			<div class="logo"><?php echo $data4['site_name']; ?></div>
			<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png" class="icn menuicn" id="menuicn" alt="menu-icon">
		</div>
	<?php endforeach; ?>
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
						<h3><a href="<?= base_url("Admin_site_name/index"); ?>">Site_name</a></h3>
					</div>

					<div class="nav-option logout">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png" class="nav-img" alt="logout">
						<h3><a href="<?= base_url('Logout');?>">Logout</a></h3>
					</div>

				</div>
			</nav>
		</div>
		<div class="main">

 		<?php foreach($results as $result): ?>
			<form method="post" action="<?= base_url('Admin_contact/contact_part1');?>" enctype="multipart/form-data">

			<div class="home_form">
				  <div class="row form_feilds" style="display: flex;" >
  					<div class="col">
   						 <input type="text" name="heading" class="form-control" placeholder = "heading"  aria-label="First name" value="<?php echo $result['heading']; ?>">
  					</div>
  					<div class="col">
    					<input type="text" name="paragraph_frist" class="form-control" placeholder="paragraph_frist" aria-label="First name" value="<?php echo $result['paragraph']; ?>">
  					</div>
				  </div>
				  
				<div class="row form_feilds" style="display: flex;" >
  					<div class="col">
   						 <input type="text" name="email_id" class="form-control" placeholder="email_id" aria-label="First name" value="<?php echo $result['email_id']; ?>">
  					</div>
  					<div class="col">
    					<input type="text" name="email" class="form-control" placeholder="email" aria-label="First name" value="<?php echo $result['email']; ?>">
  					</div>
  				</div>

  				<div class="row form_feilds" style="display: flex;" >
  					<div class="col">
   						 <input type="text" name="phone" class="form-control" placeholder="phone" aria-label="First name" value="<?php echo $result['phone']; ?>">
  					</div>
  					<div class="col">
    					<input type="text" name="phone_number" class="form-control" placeholder="phone_number" aria-label="First name" value="<?php echo $result['phone_number']; ?>">
  					</div>
  				</div>

  				<div class="row form_feilds" style="display: flex;" >
  					<div class="col">
   						 <input type="text" name="location_name" class="form-control" placeholder="location_name" aria-label="First name" value="<?php echo $result['location_name']; ?>">
  					</div>
  					<div class="col">
    					<input type="text" name="full_address" class="form-control" placeholder="full_address" aria-label="First name" value="<?php echo $result['address']; ?>">
  					</div>
  				</div>

  				<div class="row form_feilds" style="display: flex;" >
  					<div class="col">
   						 <input type="text" name="title" class="form-control" placeholder="title" aria-label="First name" value="<?php echo $result['title']; ?>">
  					</div>
  					<div class="col">
    					<textarea name="title_paragraph"><?php echo $result['title_paragraph']; ?></textarea>
  					</div>
  				</div>
				
				  <div class="row form_feilds"  style="display: flex;" >
				  	
  					<div class="col">
   						 <button type="submit">update</button>
  					</div>  					
				  </div>
				 </div>
			 </div>
			 </form>
		</div>
	</div>
<?php endforeach; ?>

	<script src="http://localhost/Student_Management/assets/js/index.js"></script>
</body>
</html>
