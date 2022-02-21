<?php

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>HealthEasy | Beds</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/00e96782cf.js" crossorigin="anonymous"></script>

	<style type="text/css">
		header{
			background-color: #111;
			height: 50px;
			padding-top: 7px;
			padding-left: 50px;
		}
		/* Centering the div*/
		body{
			font-family: Georgia;
			font-size: 17px;
		}	

	</style>

</head>

<body style="padding-top: 0px; background-color: #dfe4ea;">

	<header>
        
  </header>
	<br>

	<h1 style="text-align: center;">Records in the system</h1> &nbsp;
	<h2>Patients</h2>
	<div> 
		<form action="" method="POST">
			<input type="text" name="user_id" placeholder="Enter user id" />
			<input type="submit" name="search" value="Search">
		</form>

		<table class="table">
			<tr>
				<th>Id</th>
				<th>Full Name</th>
				<th>National ID</th>
				<th>County</th>
				<th>DOB</th>
				<th>Gender</th>
				<th>Height</th>
				<th>Weight</th>
				<th>Email Address</th>
				<th>Phone number</th>
				<th>Username</th>
				<th>Password</th>
			</tr>
			<?php
			$connection = mysqli_connect("localhost","root","");
			$db = mysqli_select_db($connection,'isproject1');

			if(isset($_POST['search'])){
				$user_id = $_POST['user_id'];

				$query = "SELECT * FROM `user` WHERE user_id='$user_id' ";
				$query_run = mysqli_query($connection,$query);

				while($row = mysqli_fetch_array($query_run)){
					?>
					<tr>
						<td> <?php echo $row['user_id']; ?> </td>
						<td> <?php echo $row['full_name']; ?> </td>
						<td> <?php echo $row['nationalID']; ?> </td>
						<td> <?php echo $row['county']; ?> </td>
						<td> <?php echo $row['DOB']; ?> </td>
						<td> <?php echo $row['gender']; ?> </td>
						<td> <?php echo $row['height']; ?> </td>
						<td> <?php echo $row['weight']; ?> </td>
						<td> <?php echo $row['email_address']; ?> </td>
						<td> <?php echo $row['telephone_number']; ?> </td>
						<td> <?php echo $row['username']; ?> </td>
						<td> <?php echo $row['password']; ?> </td>
					</tr>
					<?php
				}
			}
			?>
		</table>
	</div>
	<br><br><br><br>

	<h2>Doctors</h2>
	<div> 
		<form action="" method="POST">
			<input type="text" name="doctor_id" placeholder="Enter Doctor id" />
			<input type="submit" name="search1" value="Search">
		</form>

		<table class="table">
			<tr>
				<th>Id</th>
				<th>Full Name</th>
				<th>Speciality</th>
				<th>Email Address</th>
				<th>Phone number</th>
				<th>County</th>
				<th>Working hours</th>
				<th>Username</th>
				<th>Password</th>
			</tr>
			<?php
			$connection = mysqli_connect("localhost","root","");
			$db = mysqli_select_db($connection,'isproject1');

			if(isset($_POST['search1'])){
				$doctor_id = $_POST['doctor_id'];

				$query = "SELECT * FROM `doctor` WHERE doctor_id='$doctor_id' ";
				$query_run = mysqli_query($connection,$query);

				while($row = mysqli_fetch_array($query_run)){
					?>
					<tr>
						<td> <?php echo $row['doctor_id']; ?> </td>
						<td> <?php echo $row['doctor_name']; ?> </td>
						<td> <?php echo $row['speciality']; ?> </td>
						<td> <?php echo $row['email_address']; ?> </td>
						<td> <?php echo $row['telephone_number']; ?> </td>
						<td> <?php echo $row['county']; ?> </td>
						<td> <?php echo $row['working_hours']; ?> </td>
						<td> <?php echo $row['username']; ?> </td>
						<td> <?php echo $row['password']; ?> </td>
					</tr>
					<?php
				}
			}
			?>
		</table>
	</div>
	<br><br><br><br>

	<h2>Hospitals</h2>
	<div> 
		<form action="" method="POST">
			<input type="text" name="hospital_id" placeholder="Enter Hospital id" />
			<input type="submit" name="search2" value="Search">
		</form>

		<table class="table">
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>County</th>
				<th>Phone number</th>
				<th>Email Address</th>
				<th>Beds Available</th>
				<th>Username</th>
				<th>Password</th>
			</tr>
			<?php
			$connection = mysqli_connect("localhost","root","");
			$db = mysqli_select_db($connection,'isproject1');

			if(isset($_POST['search2'])){
				$hospital_id = $_POST['hospital_id'];

				$query = "SELECT * FROM `hospital` WHERE hospital_id='$hospital_id' ";
				$query_run = mysqli_query($connection,$query);

				while($row = mysqli_fetch_array($query_run)){
					?>
					<tr>
						<td> <?php echo $row['hospital_id']; ?> </td>
						<td> <?php echo $row['hospital_name']; ?> </td>
						<td> <?php echo $row['county']; ?> </td>
						<td> <?php echo $row['telephone_number']; ?> </td>
						<td> <?php echo $row['email_address']; ?> </td>
						<td> <?php echo $row['beds_available']; ?> </td>
						<td> <?php echo $row['username']; ?> </td>
						<td> <?php echo $row['password']; ?> </td>
					</tr>
					<?php
				}
			}
			?>
		</table>
	</div>


</body>
</html>



