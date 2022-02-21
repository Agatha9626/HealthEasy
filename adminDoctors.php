<?php

	//session_start();
	/*require_once ('dbConnect.php');

	if(isset($_POST['submit_login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$hashed_password=hashPassword($password);

		$sql = "select * from user where username='$username' and password='$hashed_password' ";

		$user_login = GetData($sql);

		if (count($user_login)>0) {
			$user_id = $user_login[0]['user_id'];
			$username = $user_login[0]['username'];

			$_SESSION['user_details'] = array('user_id'=>$user_id, 'username'=>$username);

			header("Location: userDb.php");

		} else{
			echo "Invalid username or password";
		}
	} */

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Doctors</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/00e96782cf.js" crossorigin="anonymous"></script>

	<style type="text/css">
		/* Centering the div*/
		.center {
			margin: auto;
			width: 40%;
			height: 500px;
			/*border: 5px ridge; #7f8fa6;
			background-color: #dcdde1; */
			padding: 10px;
		}
		body{
			font-family: Georgia;
			font-size: 18px;
		}
		/* Side Nav Bar*/
		.sidenav {
		  	height: 100%;
		  	width: 160px;
		 	position: fixed;
		  	z-index: 1;
		  	top: 0;
		  	left: 0;
		 	background-color: #111;
		  	overflow-x: hidden;
		  	padding-top: 20px;
		}

		.sidenav a {
		  	padding: 6px 8px 6px 16px;
			text-decoration: none;
			font-size: 25px;
			color: #818181;
			display: block;
		}

		.sidenav a:hover {
		  	color: #f1f1f1;
		}

		.main {
		  	margin-left: 160px; /* Same as the width of the sidenav */
		  	font-size: 18px; /* Increased text to enable scrolling */
		  	padding: 0px 10px;
		  	padding-top: 40px;
		}

		@media screen and (max-height: 450px) {
		  	.sidenav {padding-top: 15px;}
		  	.sidenav a {font-size: 18px;}
		}
		/* Search Bar */
		* {
		  	box-sizing: border-box;
		}

		form.example input[type=text] {
		  	padding: 10px;
		  	font-size: 17px;
		 	border: 1px solid grey;
		 	float: left;
		  	width: 80%;
		  	background: #f1f1f1;
		}

		form.example button {
		  	float: left;
		  	width: 10%;
		  	padding: 10px;
		  	background: #2196F3;
		  	color: white;
		  	font-size: 17px;
		  	border: 1px solid grey;
		  	border-left: none;
		  	cursor: pointer;
		}

		form.example button:hover {
		  	background: #0b7dda;
		}

		form.example::after {
		  	content: "";
		  	clear: both;
		  	display: table;
		}
		header{
			background-color: #111;
			height: 50px;
			padding-top: 7px;
			padding-right: 7px;
		}

	</style>

</head>

<body style="padding-top: 0px; background-color: #dfe4ea;">

	<div class="sidenav">
	  	<a href="adminUsers.php">Users</a>
	  	<a href="adminDoctors.php">Doctors</a>
	  	<a href="adminHospitals.php">Hospitals</a>
	  	<a href="adminReports.php">Reports</a>
	</div>
	<header>
		<p style="text-align: right; padding-right: 30px;">
			<button type="button" class="btn btn-danger"><a href="logout.php" target="_self" style="color: white; text-decoration: none;">Log out</a></button>
		</p>
	</header>

	
	<div class="main">

		<form class="example" method="POST" action="" style="margin:auto;max-width:700px">
		  <input type="text" placeholder="Search.." autocomplete="off" name="doctor_id">
		  <button type="submit" name="search" value="Search Data"><i class="fa fa-search"></i></button>
		</form>

		<?php 
			$connection = mysqli_connect("localhost","root","");
			$db = mysqli_select_db($connection,'isproject1');

			if (isset($_POST['search'])) {

				$doctor_id = $_POST['doctor_id'];

				$query = "SELECT * FROM doctor WHERE doctor_id='$doctor_id' ";
				$query_run = mysqli_query($connection,$query);

				while($row = mysqli_fetch_array($query_run)){
					?>
					<form action="" method="POST">
						<input type="hidden" name="doctor_id" value="<?php echo $row['doctor_id']?>"/><br>
						<!--<input type="text" name="profileImage" value="">-->
						<div class="form-group row">
							<label for="doctor_name" class="col-sm-2 col-form-label">Name</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="doctor_name" style="text-transform: capitalize;" value="<?php echo $row['doctor_name'] ?>"/>
							</div>
						</div>

						<!--
						<div class="form-group row">
							<label for="nationalID" class="col-sm-2 col-form-label">National Id</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="nationalID" value="<?php //echo $row['nationalID'] ?>"/>
							</div>
						</div>
						-->

						<div class="form-group row">
							<label for="speciality" class="col-sm-2 col-form-label">Speciality</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" style="text-transform: capitalize;" name="speciality" value="<?php echo $row['speciality'] ?>"/>
							</div>	
						</div>

						<div class="form-group row">
							<label for="email_address" class="col-sm-2 col-form-label">Email Address</label>
							<div class="col-sm-4">	
								<input type="text" class="form-control" name="email_address" value="<?php echo $row['email_address'] ?>"/>
							</div>
						</div>

						<div class="form-group row">
							<label for="telephone_number" class="col-sm-2 col-form-label">Phone number</label>
							<div class="col-sm-4">		
								<input type="text" class="form-control" name="telephone_number" value="<?php echo $row['telephone_number'] ?>"/>
							</div>
						</div>

						<div class="form-group row">
							<label for="county" class="col-sm-2 col-form-label">County</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" style="text-transform: capitalize;" name="county" value="<?php echo $row['county'] ?>"/>
							</div>	
						</div>

						<div class="form-group row">
							<label for="working_hours" class="col-sm-2 col-form-label">Working hours</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" style="text-transform: capitalize;" name="working_hours" value="<?php echo $row['working_hours'] ?>"/>
							</div>	
						</div>
						
						<div class="form-group row">
							<label for="username" class="col-sm-2 col-form-label">Username</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="username" value="<?php echo $row['username'] ?>"/>
							</div>	
						</div>
							
						<button type="submit" class="btn btn-dark" name="update" value="Update Data">Update Data</button>

						<button type="submit" class="btn btn-danger" name="delete" value="Delete">Delete Account</button>

					</form>

					<?php
				}
			}


		?>
		<br>
  		
</body>
</html>

<?php
	$db = mysqli_select_db($connection,'isproject1');

	if(isset($_POST['update'])){

		$doctor_name = $_POST['doctor_name'];
		//$nationalID = $_POST['nationalID'];
		$speciality = $_POST['speciality'];
		$email_address = $_POST['email_address'];
		$telephone_number = $_POST['telephone_number'];
		$county = $_POST['county'];
		$working_hours = $_POST['working_hours'];
		
		$username = $_POST['username'];

		$query = "UPDATE `doctor` SET doctor_name='$_POST[doctor_name]', speciality='$_POST[speciality]',  email_address='$_POST[email_address]', telephone_number='$_POST[telephone_number]', county='$_POST[county]', working_hours='$_POST[working_hours]',username='$_POST[username]' WHERE doctor_id='$_POST[doctor_id]' ";
		$query_run = mysqli_query($connection,$query);

		if($query_run){
			echo "Data Updated" ;
		}
		else{
			echo '<script> alert("Data Not Updated)" </script>' ;
		}
	}
if(isset($_POST['delete'])){

		$doctor_name = $_POST['doctor_name'];
		//$nationalID = $_POST['nationalID'];
		$speciality = $_POST['speciality'];
		$email_address = $_POST['email_address'];
		$telephone_number = $_POST['telephone_number'];
		$county = $_POST['county'];
		$working_hours = $_POST['working_hours'];
		
		$username = $_POST['username'];

		$query = "DELETE FROM `doctor` WHERE doctor_id='$_POST[doctor_id]' ";
		$query_run = mysqli_query($connection,$query);

		if($query_run){
			echo "Data Deleted" ;
		}
		else{
			echo '<script> alert("Data Not Deleted)" </script>' ;
		}
	}



?>