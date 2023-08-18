
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
					<div class="nav-option option6">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png" class="nav-img" alt="settings">
						<h3><a href="<?= base_url("sendmultiplemail/"); ?>">Send mail</a></h3>
					</div>

					<div class="nav-option logout">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png" class="nav-img" alt="logout">
						<h3><a href="<?= base_url('Logout');?>">Logout</a></h3>
					</div>

				</div>
			</nav>
		</div>
		<div class="main">
			<h1>Product Details</h1>
			<div class="container">
				<form method="post" action="<?= base_url('sendmultiplemail/send'); ?>" enctype="multipart/form-data">
					<!-- <div class="inputs">
						Logo:<input type="file" name="logo">
						
					</div>
					<div class="inputs">
						Sell-text:<input type="text" name="sell_text">
					</div>

					<div class="inputs">
						Product-image:<input type="file" name="product_img">
					</div>
					<div class="product_details">
						Product-details:<br><textarea></textarea>
					</div>
					<div class="product_details">
						<input type="submit" name="">
					</div> -->
					email:<input type="email" name="email"><br>
					name:<input type="text" name="name"><br>
					<input type="submit" name="">
				</form>
			</div>

			<div class="email-details">
				<h1>email details</h1>
				<table id='empTable' class='display dataTable'>

   					<thead>
       					<tr>
                             <th>email</th>
                             <th>Name</th>
                             <th>Delete</th>
       					</tr>
   					</thead>

				</table>
				</div>

				<div><h1>Product Details</h1></div>


				<div class="products">
				  <form method="post" action="<?= base_url('sendmultiplemail/send_email_with_photo') ?>" enctype="multipart/form-data">	
					Logo:<input type="file" name="logo"><br>
					Sell:<input type="text" name="sell_contant"><br>
					Product-image<input type="file" name="product_image"><br>
					Product-Details:<input type="text" name="Product_details"><br>
					<input type="submit" name="">
				   </form>
				</div>












	<!-- Script -->
     <script type="text/javascript">
     $(document).ready(function(){

        $('#empTable').DataTable({
          'processing': true,
          'serverSide': true,
          'serverMethod': 'post',
          'ajax': {
             'url':'<?= base_url('sendmultiplemail/emailList'); ?>'
          },
          'columns': [
             { data: 'email' },
             { data: 'name' },
             { data: 'Delete' }
          
          ]
        });
     });
     </script>
	
		</div>
	</div>

	<script src="http://localhost/Student_Management/assets/js/index.js"></script>
</body>
</html>
