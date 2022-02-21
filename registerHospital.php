<?php
	session_start(); 
	require_once ('dbConnect.php');

	$sql = "select * from hospital";
	
	
	if(isset($_POST['submit_reg'])){
		//echo "<pre>", print_r($_POST), "</pre>";
		//die();
		//echo "<pre>", print_r($_FILES['profileimage'])
		
		$profileImageName = time() . '_' . $_FILES['profileImage']['name'];
		$target = 'HospitalDP/' . $profileImageName;
		move_uploaded_file($_FILES['profileImage']['tmp_name'], $target);

		$hospital_name = $_POST['hospital_name'];
		$county = $_POST['county'];
		$telephone_number = $_POST['telephone_number'];
		$email_address = $_POST['email_address'];
		$beds_available = $_POST['beds_available'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$hashed_password=hashPassword($password);

		
		
		//$hashed_password=hashPassword($password);
		//echo"The password $password is an its hash is $hashed_password";
		 

		$sql = "INSERT INTO `hospital`(`hospital_id`, `profileImage`, `hospital_name`, `county`, `telephone_number`, `email_address`,  `beds_available`, `username`, `password`) VALUES (null,'$profileImageName','$hospital_name','$county','$telephone_number','$email_address','$beds_available', '$username','$hashed_password')";

		InsertData($sql);

		$_SESSION['hospital_details'] = array('hospital_id'=>$hospital_id, 'profileImage'=>$profileImageName, 'hospital_name'=>$hospital_name, 'county'=>$county, 'telephone_number'=>$telephone_number, 'email_address'=>$email_address,  'beds_available'=>$beds_available, 'username'=>$username, 'password'=>$password);

		header("Location: hospitalProfile.php");

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
	<title>Hospital | Sign up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/00e96782cf.js" crossorigin="anonymous"></script>

	<style type="text/css">
		header{
			background-color: #192a56;
			height: 50px;
			padding-top: 7px;
			padding-right: 7px;
		}

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

	<header>
		<p style="text-align: right; padding-right: 30px;">
			<button type="button" class="btn btn-secondary"><a href="signUp.php" target="_blank" style="color: white; text-decoration: none;">Sign up</a></button> &nbsp;
			<button type="button" class="btn btn-info"><a href="loginHospital.php" target="_blank" style="color: white; text-decoration: none;">Log in</a></button>
		</p>
	</header>
	<br><br>

	<div class="center">    

		<h1 style="text-align: center;">Register Hospital</h1> &nbsp;

		<form action="registerHospital.php" method="post" enctype="multipart/form-data">

			<div class="form-group row">
				<label for="profileImage" class="col-sm-4 col-form-label">Profile Picture</label>
				<div class="col-sm-8">
					<input type="file" name="profileImage" id="profileImage" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label for="hospital_name" class="col-sm-4 col-form-label">Name</label>
			    <div class="col-sm-8">
			      	<input type="text" class="form-control" name="hospital_name" autocomplete="off" required="true" style="text-transform: capitalize;" placeholder="Name" id="hospital_name">
			    </div>
			</div>

			<div class="form-group row">
				<label for="county" class="col-sm-4 col-form-label">County</label>
			    <div class="col-sm-8">
			      	<input type="text" class="form-control" name="county" autocomplete="off" style="text-transform: capitalize;" required="true" placeholder="County" id="county">
			    </div>
			</div>

			<div class="form-group row">
				<label for="telephone_number" class="col-sm-4 col-form-label">Phone Number</label>
			    <div class="col-sm-8">
			      	<input type="text" class="form-control" name="telephone_number" autocomplete="off" required="true" placeholder="0710 123456" id="telephone_number">
			    </div>
			</div>

			<div class="form-group row">
				<label for="email_address" class="col-sm-4 col-form-label">Email Address</label>
			    <div class="col-sm-8">
			      	<input type="text" class="form-control" name="email_address" autocomplete="off" required="true" placeholder="example@gmail.com" id="email_address">
			    </div>
			</div>

			<div class="form-group row">
				<label for="beds_available" class="col-sm-4 col-form-label">Beds Available</label>
			    <div class="col-sm-8">
			      	<input type="text" class="form-control" name="beds_available" autocomplete="off" required="true" placeholder="Number of beds available" id="beds_available">
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
			      	<input type="password" class="form-control" name="password" autocomplete="off" required="true" placeholder="********" id="password">
			    </div>
			</div>

			  
			<div class="form-group row">
			    <div class="col-sm-10">
			      <button type="submit" class="btn btn-dark" name="submit_reg">Sign in</button>
			    </div>
			 </div>
		</form>

		<p style="text-align: center;">Already have an account? <a href="loginHospital.php">Log in</a></p>
		<br><br>

		     
		
	</div>


</body>
</html>