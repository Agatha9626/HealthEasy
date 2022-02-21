<?php
	session_start();  
	require_once ('dbConnect.php');

	$sql = "select * from doctor";
	//$sql = "select * from authentication";

	if(isset($_POST['submit_reg'])){

		$profileImageName = time() . '_' . $_FILES['profileImage']['name'];
		$target = 'DoctorDP/' . $profileImageName;
		move_uploaded_file($_FILES['profileImage']['tmp_name'], $target);
		
		$doctor_name = $_POST['doctor_name'];
		$speciality = $_POST['speciality'];
		$email_address = $_POST['email_address'];
		$telephone_number = $_POST['telephone_number'];
		$county = $_POST['county'];
		$working_hours=$_POST['working_hours'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$hashed_password=hashPassword($password);
		//add timestamp when account is created

		//$hashed_password=hashPassword($password);
		//echo"The password $password is an its hash is $hashed_password";
		 

		$sql = "INSERT INTO `doctor`(`doctor_id`, `profileImage`, `doctor_name`, `speciality`, `email_address`, `telephone_number`, `county`, `working_hours`, `username`, `password`) VALUES (null, '$profileImageName','$doctor_name','$speciality','$email_address','$telephone_number','$county', '$working_hours' ,'$username','$hashed_password')";  

		InsertData($sql);

		$_SESSION['doctor_details'] = array('doctor_id'=>$doctor_id, 'profileImage'=>$profileImageName, 'doctor_name'=>$doctor_name, 'speciality'=>$speciality, 'email_address'=>$email_address, 'telephone_number'=>$telephone_number, 'county'=>$county, 'working_hours'=>$working_hours, 'username'=>$username, 'password'=>$password);

		header("Location: doctorProfile.php");
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
	<title>Doctor | Sign up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/00e96782cf.js" crossorigin="anonymous"></script>

	<style type="text/css">
		header{
			background-color: #192a56;
			height: 50px;
			padding-top: 7px;
			padding-left: 150px;
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
      <a href="homePage.php" target="_self" style="color: white; text-decoration: none; ">Home</a> &nbsp;&nbsp;&nbsp;&nbsp;
      <a href="contactUs.php" target="_blank" style="color: white; text-decoration: none; ">Contact Us</a> &nbsp;&nbsp;&nbsp;&nbsp;
      <a href="aboutUs.php" target="_blank" style="color: white; text-decoration: none; ">About Us</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  

      <button type="button" class="btn btn-secondary"><a href="signUp.php" target="_blank" style="color: white; text-decoration: none; font-size: 17px;">Sign up</a></button> &nbsp;
      <button type="button" class="btn btn-info"><a href="loginselect.php" target="_blank" style="color: white; text-decoration: none; font-size: 17px;">Log in</a></button>
  </header>
	<br><br>

	<div class="center">    

		<h1 style="text-align: center;">Register Doctor</h1> &nbsp;

		<form action="registerDoctor.php" method="post" enctype="multipart/form-data">

			<div class="form-group row">
				<label for="profileImage" class="col-sm-4 col-form-label">Profile Picture</label>
				<div class="col-sm-8">
					<input type="file" name="profileImage" id="profileImage" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label for="doctor_name" class="col-sm-4 col-form-label">Name</label>
				<div class="col-sm-8">
				    <input type="text" class="form-control" name="doctor_name" style="text-transform: capitalize;" autocomplete="off" required="true" placeholder="Name" id="doctor_name">
				</div>
			</div>

			<div class="form-group row">
				<label for="speciality" class="col-sm-4 col-form-label">Speciality</label>
				<div class="col-sm-8">
				    <input type="text" class="form-control" name="speciality" style="text-transform: capitalize;" autocomplete="off" required="true" placeholder="Speciality" id="speciality">
				</div>
			</div>

			<div class="form-group row">
				<label for="email_address" class="col-sm-4 col-form-label">Email Address</label>
				<div class="col-sm-8">
				    <input type="text" class="form-control" name="email_address" autocomplete="off" required="true" placeholder="example@gmail.com" id="email_address">
				</div>
			</div>

			<div class="form-group row">
				<label for="telephone_number" class="col-sm-4 col-form-label">Phone Number</label>
				<div class="col-sm-8">
				    <input type="text" class="form-control" name="telephone_number" autocomplete="off" required="true" placeholder="Phone number" id="telephone_number">
				</div>
			</div>

			<div class="form-group row">
				<label for="county" class="col-sm-4 col-form-label">County</label>
				<div class="col-sm-8">
				    <input type="text" class="form-control" name="county" style="text-transform: capitalize;" autocomplete="off" required="true" placeholder="County" id="county">
				</div>
			</div>

			<div class="form-group row">
				<label for="working_hours" class="col-sm-4 col-form-label">Working hours</label>
				<div class="col-sm-8">
				    <input type="text" class="form-control" name="working_hours" style="text-transform: capitalize;" autocomplete="off" required="true" placeholder="e.g 9:00am-6:00pm" id="working_hours">
				</div>
			</div>

			<!-- We can remove username so doctors can log in with email instead of username-->
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

		<p style="text-align: center;">Already have an account? <a href="loginDoctor.php">Log in</a></p>
		<br><br>
	
		<!--
		<th>
			<img src="Images/Doctors-illustration.png" width="400px" height="600px">
		</th> -->

		     
		
	</div>


</body>
</html>