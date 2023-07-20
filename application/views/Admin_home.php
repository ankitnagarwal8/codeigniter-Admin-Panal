
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
            border-radius: 12px;
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
							<a href="#">Course</a>
						</h3>
					</div>
					<div class="nav-option option3">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png" class="nav-img" alt="report">
						<h3>
							<a href="#">Trainer</a>
						</h3>
					</div>
					<div class="nav-option option3">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png" class="nav-img" alt="report">
						<h3>
							<a href="#">Events</a>
						</h3>
					</div>
					<div class="nav-option option3">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png" class="nav-img" alt="report">
						<h3>
							<a href="#">Pricing</a>
						</h3>
					</div>
					<div class="nav-option option3">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png" class="nav-img" alt="report">
						<h3>
							<a href="#">Contact</a>
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
				<h1>HOME</h1>
				</div>
				<form method="post" action="<?= base_url('home/changeimg');?>" enctype="multipart/form-data">

					
				 
				<div class="home_form">
				  <div class="row form_feilds" style="display: flex;" >
  					<div class="col">
   						 <input type="text" name="frist_h1" class="form-control" placeholder="frist_h1" aria-label="First name">
  					</div>
  					<div class="col">
    					<input type="text" name="frist_h2" class="form-control" placeholder="frist_h2" aria-label="Last name">
  					</div>
				  </div>
				  <div class="row form_feilds"  style="display: flex;" >
  					<div class="col">
   						 <input type="text" name="paragraph_h2" class="form-control" placeholder="paragraph_h2" aria-label="First name">
  					</div>
  					<div class="col">
    					<input type="file" name="image" class="form-control" aria-label="Last name">
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

			 <!-- part2 -->

			 <div class="home_section">
				<div class="home">
				<h1>Home part 2</h1>
				</div>
				<form method="post" action="<?= base_url('home/home_part2');?>" enctype="multipart/form-data">

				<div class="home_form">
				<div class="row form_feilds" style="display: flex;" >
  					<div class="col">
   						 <input type="text" name="frist_h1" class="form-control" placeholder="heading" aria-label="First name">
  					</div>
  					<div class="col">
    					<input type="text" name="p1" class="form-control" placeholder="paragraph1" aria-label="Last name">
  					</div>
				</div>
				<div class="row form_feilds" style="display: flex;" >
  					<div class="col">
   						 <input type="text" name="list1" class="form-control" placeholder="list1" aria-label="First name">
  					</div>
  					<div class="col">
    					<input type="text" name="list2" class="form-control" placeholder="list2" aria-label="Last name">
  					</div>
				</div>
				<div class="row form_feilds" style="display: flex;" >
  					<div class="col">
   						 <input type="text" name="list3" class="form-control" placeholder="list3" aria-label="First name">
  					</div>
  					<div class="col">
    					<input type="text" name="p2" class="form-control" placeholder="paragraph2" aria-label="Last name">
  					</div>
				</div>
				<div class="row form_feilds" style="display: flex;" >
  					<div class="col">
   						 <input type="file" name="image" class="form-control" placeholder="frist_h1" aria-label="First name">
  					</div>
  					<div class="col">
    					<button type="submit">update</button>
  					</div>
				</div>
			</div>
		</form>
			</div>

			<!-- end part 2 -->

			<!-- part 3 -->


			 <div class="home_section">
				<div class="home">
				<h1>Home part 3</h1>
				</div>
				<form method="post" action="<?= base_url('home/home_part3');?>" enctype="multipart/form-data">

				<div class="home_form">
				<div class="row form_feilds" style="display: flex;" >
  					<div class="col">
   						 <input type="text" name="heading_frist" class="form-control" placeholder="heading_frist" aria-label="First name">
  					</div>
  					<div class="col">
    					<input type="text" name="paragraph_frist" class="form-control" placeholder="paragraph_frist" aria-label="Last name">
  					</div>
				</div>
				<div class="row form_feilds" style="display: flex;" >
  					<div class="col">
   						 <input type="text" name="servies_frist_heading" class="form-control" placeholder="servies_frist_heading" aria-label="First name">
  					</div>
  					<div class="col">
    					<input type="text" name="servies_frist_paragraph" class="form-control" placeholder="servies_frist_paragraph" aria-label="Last name">
  					</div>
				</div>
				<div class="row form_feilds" style="display: flex;" >
  					<div class="col">
   						 <input type="text" name="servies_second_heading" class="form-control" placeholder="servies_second_heading" aria-label="First name">
  					</div>
  					<div class="col">
    					<input type="text" name="servies_second_paragraph" class="form-control" placeholder="servies_second_paragraph" aria-label="Last name">
  					</div>
				</div>
				<div class="row form_feilds" style="display: flex;" >
  					<div class="col">
   						 <input type="text" name="servies_third_heading" class="form-control" placeholder="servies_third_heading" aria-label="First name">
  					</div>
  					<div class="col">
    					<input type="text" name="servies_third_paragraph" class="form-control" placeholder="servies_third_paragraph" aria-label="Last name">
  					</div>
				</div>
				<div class="row form_feilds" style="display: flex;" >
  				  	<div class="col">
    					<button type="submit">update</button>
  					</div>
				</div>
			</div>
			</form>
			</div>

			<!-- end part 3 -->

			<!-- part4 -->

			<!-- <div class="home_section">
				<div class="home">
					<h1>Home part 3</h1>
				</div>
				<form method="post" action="" enctype="multipart/form-data">

					<div class="home_form">
						<div class="row form_feilds" style="display: flex;" >
  							<div class="col">
   						 		<input type="text" name="heading_frist" class="form-control" placeholder="heading_frist" aria-label="First name">
  							</div>
  							<div class="col">
    							<input type="text" name="paragraph_frist" class="form-control" placeholder="paragraph_frist" aria-label="Last name">
  							</div>
						</div>
						<div class="row form_feilds" style="display: flex;" >
  							<div class="col">
   						 		<input type="text" name="servies_frist_heading" class="form-control" placeholder="servies_frist_heading" aria-label="First name">
  							</div>
  							<div class="col">
    							<input type="text" name="servies_frist_paragraph" class="form-control" placeholder="servies_frist_paragraph" aria-label="Last name">
  							</div>
						</div>
						<div class="row form_feilds" style="display: flex;" >
  							<div class="col">
   						 		<input type="text" name="servies_second_heading" class="form-control" placeholder="servies_second_heading" aria-label="First name">
  							</div>
  							<div class="col">
    							<input type="text" name="servies_second_paragraph" class="form-control" placeholder="servies_second_paragraph" aria-label="Last name">
  							</div>
						</div>
						<div class="row form_feilds" style="display: flex;" >
  							<div class="col">
   						 		<input type="text" name="servies_third_heading" class="form-control" placeholder="servies_third_heading" aria-label="First name">
  							</div>
  							<div class="col">
    							<input type="text" name="servies_third_paragraph" class="form-control" placeholder="servies_third_paragraph" aria-label="Last name">
  							</div>
						</div>
						<div class="row form_feilds" style="display: flex;" >
  				  			<div class="col">
    							<button type="submit">update</button>
  							</div>
						</div>
					</div>
				</form>
			</div> -->
			
  








			</div>
		</div>
	</div>

	<script src="http://localhost/Student_Management/assets/js/index.js"></script>






</body>
</html>
