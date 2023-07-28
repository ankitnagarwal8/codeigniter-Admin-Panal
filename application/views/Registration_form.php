<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form validation (IT SOURCECODE)</title>
	<style>
		*{
			margin:0;
			padding: 0;
			font-family: "Times New Roman", Times, serif;
			background-color: #24F7BD;
		}
		form{
			padding:2rem;
			text-align: center;
		}
		tr td h1{
			font-size: 4rem;
		}
		tr td{
			font-size: 1.5rem;
		}
		tr td input{
			width:100%;
			height:1.5rem;
			border-radius: 5px;
			border:none;
			background-color: lightcyan;
		}
		.td_frist{
			display:flex;
		}
		p{
			text-align: center;
			font-size: 1rem;
			color: blue;
		}


	</style>
</head>
<body>
		<div class="container">
			<form action="<?= base_url('Student/signup');?>"enctype="multipart/form-data" method="post">

				<table cellpadding="2" width="90%" align="center" cellspacing="2">

					<tr class="form-control">
						<td colspan=2>
							<h1>Student Registration Form</h1>
						</td>
					</tr>

					<tr class="form-control">
							<td>Full Name</td>
							<td><input type=text name="name" id="textname" size="30"></td>
					</tr>

					<tr class="form-control">
						<td>Father Name</td>
						<td><input type="text" name="fathername" id="fathername" size="30"></td>
					</tr>
					<tr>
						<td>DOB</td>
						<td><input type="date" name="DOB" ></td>
					</tr>

					<tr class="form-control">
						<td>Address</td>
						<td><input type="text" name="personaladdress" id="personaladdress" size="30">
						</td>
					</tr>

					<tr>
						<td>Sex</td>
						<td class="td_frist"><input type="radio" name="sex" value="male" size="10">Male
						<input type="radio" name="sex" value="Female" size="10">Female</td>
					</tr>

					<tr>
						<td>Course</td>
						<td>
							<select name="Course" style="width:200px;">
								<option value="-1" selected>select..</option>
								<option value="B.Tech">B.TECH</option>
								<option value="MCA">MCA</option>
								<option value="MBA">MBA</option>
								<option value="BCA">BCA</option>
							</select></td>
					</tr>

					<tr class="form-control">
						<td>City</td>
						<td>
							<select name="City" style="width:200px;">
								<option value="-1" selected>select..</option>
								<option value="New Delhi">Dhaka</option>
								<option value="Mumbai">Rangpur</option>
								<option value="Goa">Dinajpur</option>
								<option value="Patna">Pabna</option>
							</select></td>
					</tr>


					<tr>
						<td>District</td>
						<td>
							<select name="District" style="width:200px;">
								<option value="-1" selected>select..</option>
								<option value="New Delhi">Dhaka</option>
								<option value="Mumbai">Rangpur</option>
								<option value="Goa">Dinajpur</option>
								<option value="Patna">Pabna</option>
							</select>
						</td>

					</tr>

					<tr>
						<td>State</td>
						<td>
							<select Name="State" style="width:200px;">
								<option value="-1" selected>select..</option>
								<option value="New Delhi">Dhaka</option>
								<option value="Mumbai">Rangpur</option>
								<option value="Goa">Dinajpur</option>
								<option value="Patna">Pabna</option>
							</select>
						</td>
					</tr>
					<tr class="form-control">
						<td>PinCode</td>
						<td><input type="text" name="pincode" id="pincode" size="30"></td>

					</tr>
					<tr class="form-control">
						<td>EmailId</td>
						<td><input type="text" name="emailid" id="emailid" size="30"></td>
					</tr>


					<tr class="form-control">
						<td>MobileNo: (+91)</td>
						<td><input type="text" name="mobileno" id="mobileno" size="30"></td>
					</tr>
					<tr>
						<td><input type="file" name="image" required></td>
					</tr>
					<tr class="formbutton">
						<td><input type="reset"></td>
						<td colspan="2"><input type="submit" value="Submit Form" /></td>
					</tr>

				</table>
			</form>
			<p>you are already register
				<a href="<?php echo base_url('login'); ?>"><u>login</u></a>
			</p>
		</div>

</body>
</html>