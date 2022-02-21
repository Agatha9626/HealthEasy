<?php

	session_start();
	require_once ('dbConnect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/00e96782cf.js" crossorigin="anonymous"></script>

	<style type="text/css">
		/* Centering the div*/
		.center {
			margin: auto;
			width: 60%;
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
		  	width: 180px;
		 	position: fixed;
		  	z-index: 1;
		  	top: 0;
		  	left: 0;
		 	background-color: #111;
		  	overflow-x: hidden;
		  	padding-top: 50px;
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
		.card {
		  	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		  	transition: 0.3s;
		  	width: 40%;
		  	background-color: #01a3a4;
		}

		.card:hover {
		  	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}

		.container {
		  	padding: 2px 16px;
		}

	</style>

</head>

<body style="padding-top: 0px; background-color: #dfe4ea;">

	<div class="sidenav">
	  	<a href="adminUsers.php">Users</a>
	  	<a href="adminDoctors.php">Doctors</a>
	  	<a href="adminHospitals.php">Hospitals</a>
	  	<a href="adminBeds.php">Beds</a>
	  	<a href="adminReports.php">Reports</a>
	</div>

	<header>
		<p style="text-align: right; padding-right: 30px;">
			<button type="button" class="btn btn-danger"><a href="logout.php" target="_self" style="color: white; text-decoration: none;">Log out</a></button>
		</p>
	</header>

	
	<div class="main">
		<div class="center">    

		<h1 style="text-align: center;">Welcome</h1> &nbsp;

		<?php
			$connection = mysqli_connect("localhost","root","");
			$db = mysqli_select_db($connection,'isproject1');
			//echo "<pre>";
			//print_r($_SESSION);
			if (isset($_SESSION['admin_details'])) {

				$username = $_SESSION['admin_details']['username'];
	
				echo "Welcome $username";
				//echo "Welcome $email_address";

				$query = "SELECT * FROM user WHERE username='$username' ";
				$query_run = mysqli_query($connection,$query);

				while($row = mysqli_fetch_array($query_run)){
					?>
					<?php
				}	
			}

			
		?>

	</div>
		
  
	</div>
</body>
</html>

