<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url('../assets/css/style.css')?>">
	<title>Form validation (IT SOURCECODE)</title>
</head>
<body>
	<?php 

	foreach($results as $result):

	 ?>
		<div class="container">
			<form action="<?= base_url('Edit_Student_Details/Edit_Student_Data/'.$result['id'])?>"enctype="multipart/form-data" method="post">

				<table cellpadding="2" width="90%" align="center" cellspacing="2">

					<tr class="form-control">
						<td colspan=2>
							<h2>Student Registration Form</h2>
						</td>
					</tr>

					<tr class="form-control">
							<td>Full Name</td>
							<td><input type=text name="name" id="textname" size="30" value="<?php echo $result['student_name']; ?>"></td>
					</tr>

					<tr class="form-control">
						<td>Father Name</td>
						<td><input type="text" name="fathername" id="fathername" size="30" value="<?php echo $result['father_name']; ?>"></td>
					</tr>
					<tr>
						<td>DOB</td>
						<td><input type="date" name="DOB" value="<?php echo $result['dob']; ?>" ></td>
					</tr>

					<tr class="form-control">
						<td>Address</td>
						<td><input type="text" name="personaladdress" id="personaladdress" size="30" value="<?php echo $result['address']; ?>">
						</td>
					</tr>

					<tr>
						<td >Sex</td>
						<td><input type="text" name="sex" value="male" size="10" value="<?php echo $result['sex']; ?>">
						</td>
					</tr>

					<tr>
						<td>Course</td>
						<td>
							<input type="text" name="Course" value="<?php echo $result['course']; ?>">
						</td>
					</tr>

					<tr class="form-control">
						<td >City</td>
						<td>
							<input type="text" name="City" value="<?php echo $result['city']; ?>">
						</td>
					</tr>


					<tr>
						<td>District</td>
						<td>
							<input type="text" name="District" value="<?php echo $result['district']; ?>">
						</td>

					</tr>

					<tr>
						<td>State</td>
						<td>
							<input type="text" name="State" value="<?php echo $result['state']; ?>">
						</td>
					</tr>
					<tr class="form-control">
						<td>PinCode</td>
						<td><input type="text" name="pincode" id="pincode" size="30" value="<?php echo $result['pincide']; ?>"></td>

					</tr>
					<tr class="form-control">
						<td>EmailId</td>
						<td><input type="text" name="emailid" id="emailid" size="30" value="<?php echo $result['email']; ?>"></td>
					</tr>


					<tr class="form-control">
						<td>MobileNo: (+91)</td>
						<td><input type="text" name="mobileno" id="mobileno" size="30" value="<?php echo $result['mobile_number']; ?>"></td>
					</tr>
					<tr>
						<td><input type="file" name="image" value="<?php echo $result['photo']; ?>"></td>
					</tr>
					<tr class="formbutton">
						<td><input type="reset"></td>
						<td colspan="2"><input type="submit" value="update data" /></td>
					</tr>

				</table>
			</form>
		<?php  endforeach;  ?>
			<p>you are already register
				<a href="<?php echo base_url('login'); ?>"><u>login</u></a>
			</p>
		</div>

</body>
</html>