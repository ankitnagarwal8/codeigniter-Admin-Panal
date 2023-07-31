
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
		.head{
			text-align: center;
			display: flex;

		}
		.head button{
				align-items: center;
            appearance: none;
            background-color: #3EB2FD;
            background-image: linear-gradient(1deg, #4F58FD, #149BF3 99%);
            background-size: calc(100% + 20px) calc(100% + 20px);
            border-radius: 100px;
            border-width: 0;
            box-shadow: none;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-flex;
            font-family: CircularStd,sans-serif;
            font-size: 1rem;
            height: auto;
            justify-content: center;
            line-height: 1.5;
            padding: 6px 20px;
            position: relative;
            text-align: center;
            text-decoration: none;
            transition: background-color .2s,background-position .2s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: top;
            white-space: nowrap;
            margin-left: 40rem;
		}
		.head button:active,
        .head button:focus {
            outline: none;
        }

        .head button:hover {
            background-position: -20px -20px;
        }

        .head button:focus:not(:active) {
 			 box-shadow: rgba(40, 170, 255, 0.25) 0 0 0 .125em;
		}
		.details{
			width:100%;
			font-size: 15px;
			text:bold;

		}
		form{
			width:100%;
			height:auto;
			text-align: center;

		}
		input{
         text-align: center;
         width:80%;
         height:2rem;
         margin: 1rem;
         color:232323;
         border:none;
         border-radius: 20px;
      }
      form button{
      	align-items: center;
            appearance: none;
            background-color: #3EB2FD;
            background-image: linear-gradient(1deg, #4F58FD, #149BF3 99%);
            background-size: calc(100% + 20px) calc(100% + 20px);
            border-radius: 100px;
            border-width: 0;
            box-shadow: none;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-flex;
            font-family: CircularStd,sans-serif;
            font-size: 1rem;
            height: auto;
            justify-content: center;
            line-height: 1.5;
            padding: 6px 20px;
            position: relative;
            text-align: center;
            text-decoration: none;
            transition: background-color .2s,background-position .2s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: top;
            white-space: nowrap;
            
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
						<h3><a href="<?= base_url('Pagination') ?>"> Students</a></h3>
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
			<div class="head">
				<h1>Pricing Part 1</h1>
			</div>
			<?php foreach($results as $result): ?>
			<form method="post" action="<?= base_url('Pricing_admin/Pricing_part1');?>" enctype="multipart/form-data">
					<input type="text" name="heading" value="<?php echo $result['heading']; ?>" placeholder="Heading"><br>
					<!-- <input type="text" name="paragraph" placeholder="paragraph"> -->
					<textarea name="paragraph"><?php echo $result['paragraph']; ?></textarea>
					<br>
					<button>submit</button>
			</form>
		<?php endforeach; ?>
			<br>
			<br>





			<div class="head">
				<h1>Pricing Details<h1>
				
				<button><a href="<?= base_url('Pricing_admin/add_pricing_data'); ?>">  Add  </a></button>
		    </div>
		    <div class="details">
		    	<!-- Table -->
				<table id='empTable' class='display dataTable'>
   					<thead>
       					<tr>
                             <th>user</th>
                             <th>pricing</th>
                             <th>s_frist</th>
                             <th>s_second</th>
                             <th>s_third</th>
                             <th>s_forth</th>
                             <th>s_fifth</th>
                             <th>button</th>
                             <th>Edit</th>
                             <th>Delete</th>
       					</tr>
   					</thead>

				</table>

     
		    </div>
			
		</div>
	</div>

	<!-- Script -->
     <script type="text/javascript">
     $(document).ready(function(){

        $('#empTable').DataTable({
          'processing': true,
          'serverSide': true,
          'serverMethod': 'post',
          'ajax': {
             'url':'<?= base_url('Pricing_admin/empList'); ?>'
          },
          'columns': [
             { data: 'user' },
             { data: 'pricing' },
             { data: 's_frist' },
             { data: 's_second' },
             { data: 's_third' },
             { data: 's_forth' },
             { data: 's_fifth' },
             { data: 'button' },             
             { data: 'Edit' },
             { data: 'Delete' }
          
          ]
        });
     });
     </script>


	<script src="http://localhost/Student_Management/assets/js/index.js"></script>
</body>
</html>
