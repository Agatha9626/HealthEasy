<?php
	session_start();  
	require_once ('dbConnect.php');

	$sql = "select * from admin";
	
	if(isset($_POST['submit_reg'])){
		
		$email_address = $_POST['email_address'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$hashed_password=hashPassword($password);

		$sql = "INSERT INTO `admin`(`id`, `email_address`, `username`, `password`) VALUES (null, '$email_address', '$username', '$hashed_password')";

		InsertData($sql);

		$_SESSION['admin_details'] = array('id'=>$id,'username'=>$username, 'password'=>$password);

		header("Location: adminDashboard.php");
	}

	if(isset($_POST['email_address']) == true && empty($_POST['email_address']) == false){
		$email_address = $_POST['email_address'];
		if (filter_var($email_address, FILTER_VALIDATE_EMAIL) == true) {
			echo "Valid email address";
		}
		else{
			echo "Please enter a valid email address";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>HealthEasy | Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
	</style>

</head>

<body style="padding-top: 0px; background-color: #dfe4ea;">

	<div class="center">

		<br>
		<h1 style="text-align: center;">Register Admin</h1> &nbsp;

		<form action="adminReg.php" method="post">

			<div class="form-group row">
				<label for="email_address" class="col-sm-4 col-form-label">Email Address</label>
			    <div class="col-sm-8">
			      	<input type="email" class="form-control" name="email_address" autocomplete="off" required="true" placeholder="Email Address" id="email_address">
			    </div>
			</div>

			<div class="form-group row">
				<label for="username" class="col-sm-4 col-form-label">Username</label>
			    <div class="col-sm-8">
			      	<input type="text" class="form-control" name="username" autocomplete="off" required="true" placeholder="Username" id="username">
			    </div>
			</div>

			<div class="form-group row">
				<label for="password" class="col-sm-4 col-form-label">Password</label>
			    <div class="col-sm-8">
			      	<input type="password" class="form-control" name="password" required="true" placeholder="********" id="password">
			    </div>
			</div>
			
			<div class="form-group row">
			    <div class="col-sm-10">
			      <button type="submit" class="btn btn-dark" name="submit_reg">Register</button>
			    </div>
			 </div>
		</form> 
		<p>Already have an account? <a href="adminLogin.php">Log in</a></p>      
		
	</div>


</body>
</html>