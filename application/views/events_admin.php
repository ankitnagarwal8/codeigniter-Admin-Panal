
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

	<style type="text/css">
		.head{
			background-color: #ffddee;
			text-align: center;
			font-size: 2rem;
			color:#458585;
			display: block;
		}
		form{
			text-align:center;
			height:auto;
			width:100%;			
		}
		input{
			height:3rem;
			width:80%;
			text-align: center;
			margin-top: 2rem;
			border-radius: 15px;
			border:none;
			font-size: 1rem;
		}
		button{
			height:3rem;
			width:80%;
			text-align: center;
			margin-top: 2rem;
			border-radius: 15px;
			border:none;
			font-size: 2rem;
			background-color: #8989ff;
			color:#fefefe;
		}
		.add_button{
			margin:0;
			padding: 0;
			width:100%;
			height:auto;
			text-align: center;
			background-color: #dddddd;
		}
		.add_button button{
			height:3rem;
			width:6rem;
			font-size: 2rem;
			margin-left: 50rem;
			margin-bottom: 2rem;
			
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
		<?php foreach($results as $result): ?>
		<div class="main">
			<div class="head">events part 1</div>
				<div class="body">
					<form method="post" action="<?= base_url('events_admin/Edit_Part_frist'); ?>" enctype="multipart/form-data">

						<input type="text" name="heading" value="<?php  echo $result['heading'];?>" name="heading" placeholder="heading"><br>

						<input type="text" name="paragraph" value="<?php  echo $result['paragraph'];?>" placeholder="paragraph"></br>

						<button type="submit">update</button>
					</form>
				</div>	
				<?php endforeach; ?>		
				<br>
				<br>
				<br>
			<div class="head">events part 2</div>
			<div class="add_button"><button>Add</button></div>
				<div class="body">
					<table id='empTable' class='display dataTable'>
   						<thead>
       						<tr>
                             <th>heading</th>
                             <th>timing details</th>
                             <th>details</th>
                             <th>Photo</th>
                             <th>Edit</th>
                             <th>Delete</th>
       						</tr>
   						</thead>
					</table>
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
             'url':'<?= base_url('Pagination_events/empList'); ?>'
          },
          'columns': [
             { data: 'heading' },
             { data: 'timing_details' },
             { data: 'details' },
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

