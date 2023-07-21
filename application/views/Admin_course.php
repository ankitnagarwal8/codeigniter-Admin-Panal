
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GeeksForGeeks</title>
	<link rel="stylesheet" href="http://localhost/Student_Management/assets/css/adminstyle.css">

	<!-- Datatable CSS -->
	<link href='https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

	<!-- jQuery Library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- Datatable JS -->
	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>



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
				<h1>course Part 1</h1>
				</div>
				<form method="post" action="<?= base_url('Admin_courses/course_part1');?>" enctype="multipart/form-data">
				<div class="home_form">
				  <div class="row form_feilds" style="display: flex;" >
  					<div class="col cloumn_feild">
   						 <input type="text" name="frist_h1" class="form-control" placeholder="frist_h1" aria-label="First name">
  					</div>
  					<div class="col cloumn_feild">
    					<textarea name = "text_area"></textarea>
  					</div>
				  </div>
				 
				  <div class="row form_feilds"  style="display: flex;" >
  					<div class="col cloumn_feild">
   						 <button type="submit">update</button>
  					</div>  					
				  </div>
				 </div>
				</form>
			 </div>

			 <div class="home_section" >
				<div class="home">
				<h1>course Part 2</h1>
				</div>
				<form method="post" action="<?= base_url('Admin_courses/course_part2');?>" enctype="multipart/form-data">
				<div class="home_form">
				  <div class="row form_feilds" style="display: flex;" >
  					<div class="col cloumn_feild">
   						 <input type="text" name="coursename" class="form-control" placeholder="coursename" aria-label="First name">
  					</div>
  					<div class="col cloumn_feild">
   						 <input type="text" name="course_part" class="form-control" placeholder="course_part" aria-label="First name">
  					</div>
  					
				  </div>
				  <div class="row form_feilds" style="display: flex;" >
  					<div class="col cloumn_feild">
   						 <input type="text" name="course_price" class="form-control" placeholder="course_price" aria-label="First name">
  					</div>
  					<div class="col cloumn_feild">
   						 <input type="file" name="image" class="form-control" placeholder="" aria-label="First name">
  					</div>
  					
				  </div>
				 
				  <div class="row form_feilds"  style="display: flex;" >
				  	<div class="col cloumn_feild">
    					<textarea name = "text_area"></textarea>
  					</div>
  					<div class="col cloumn_feild">
   						 <button type="submit">Add</button>
  					</div>  					
				  </div>
				 </div>
				</form>
			 </div>


			 <div class="home_section">
			 	<div class="details">
		    	<!-- Table -->
				<table id='empTable' class='display dataTable'>

   					<thead>
       					<tr>
                             <th>course name</th>
                             <th>course part</th>
                             <th>course price</th>
                             <th>course details</th>
                             <th>Photo</th>
                             <th>Edit</th>
                             <th>Delete</th>


       					</tr>
   					</thead>

				</table>

     
		    </div>


	
			 </div>




			
		</div>
	</div>
	<script type="text/javascript">
     $(document).ready(function(){

        $('#empTable').DataTable({
          'processing': true,
          'serverSide': true,
          'serverMethod': 'post',
          'ajax': {
             'url':"<?= base_url('Pagination_course/empList'); ?>"
          },
          'columns': [
             { data: 'coursename' },
             { data: 'coursepart' },
             { data: 'courseprice' },
             { data: 'text_area' },
             { data: 'photo' },
             { data: 'Edit' },
             { data: 'Delete' }
          
          ]
        });
     });
     </script>

	<script src="http://localhost/Student_Management/assets/js/index.js"></script>
</body>
</html>
