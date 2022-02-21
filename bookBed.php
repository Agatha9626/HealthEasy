<?php 
	session_start();
	require_once ('dbConnect.php');

	//$sql = "select hospital_name from hospital";
	
	
	if(isset($_POST['bookBed'])){
		
		$full_name = $_POST['full_name'];
		$nationalID = $_POST['nationalID'];
		$email_address = $_POST['email_address'];
		$telephone_number = $_POST['telephone_number'];
		$date = $_POST['date'];
		$hospital_name = $_POST['hospital_name'];
		
		$sql = "INSERT INTO `bed`(`full_name`, `nationalID`, `email_address`, `telephone_number`, `date`, `hospital_name`) VALUES ('$full_name', '$nationalID', '$email_address','$telephone_number', '$date', '$hospital_name')";

		InsertData($sql);

		//$_SESSION['user_details'] = array('user_id'=>$user_id, 'profileImage'=>$profileImageName, 'full_name'=>$full_name, 'nationalID'=>$nationalID, 'county'=>$county, 'DOB'=>$DOB, 'gender'=>$gender, 'height'=>$height, 'weight'=>$weight, 'email_address'=>$email_address, 'telephone_number'=>$telephone_number, 'username'=>$username, 'password'=>$password);

		header("Location: userProfile.php");

	}
	if(isset($_POST['bookBed'])){
		
		$full_name = $_POST['full_name'];
		$nationalID = $_POST['nationalID'];
		$email_address = $_POST['email_address'];
		$telephone_number = $_POST['telephone_number'];
		$date = $_POST['date'];
		$hospital_name = $_POST['hospital_name'];
		
		//$query = "UPDATE `hospital` SET beds_available=[beds_available-1] WHERE hospital_name='$_POST[hospital_name]' ";
		
		InsertData($sql);

		//$_SESSION['user_details'] = array('user_id'=>$user_id, 'profileImage'=>$profileImageName, 'full_name'=>$full_name, 'nationalID'=>$nationalID, 'county'=>$county, 'DOB'=>$DOB, 'gender'=>$gender, 'height'=>$height, 'weight'=>$weight, 'email_address'=>$email_address, 'telephone_number'=>$telephone_number, 'username'=>$username, 'password'=>$password);

		header("Location: userProfile.php");

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Book bed</title>
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
			<button type="button" class="btn btn-info"><a href="loginselect.php" target="_blank" style="color: white; text-decoration: none;">Log in</a></button>
		</p>
	</header>
	<br><br>

	<div class="center">    

		<h1 style="text-align: center;">Book Bed</h1> &nbsp;

		<form action="bookBed.php" method="post" enctype="multipart/form-data">

			<div class="form-group row">
				<label for="full_name" class="col-sm-4 col-form-label">Full Name</label>
			    <div class="col-sm-8">
			      	<input type="text" class="form-control" name="full_name" style="text-transform: capitalize;" autocomplete="off" required="true" placeholder="Full Name" id="full_name">
			    </div>
			</div>

			<div class="form-group row">
				<label for="nationalID" class="col-sm-4 col-form-label">National Id</label>
			    <div class="col-sm-8">
			      	<input type="text" class="form-control" name="nationalID" style="text-transform: capitalize;" autocomplete="off" required="true" placeholder="National Id" id="nationalID">
			    </div>
			</div> 
			
			<div class="form-group row">
				<label for="email_address" class="col-sm-4 col-form-label">Email Address</label>
			    <div class="col-sm-8">
			      	<input type="email" class="form-control" name="email_address" autocomplete="off" required="true" placeholder="Email Address" id="email_address">
			    </div>
			</div>

			<div class="form-group row">
				<label for="telephone_number" class="col-sm-4 col-form-label">Phone Number</label>
			    <div class="col-sm-8">
			      	<input type="text" class="form-control" name="telephone_number" autocomplete="off" required="true" placeholder="Phone number" id="telephone_number">
			    </div>
			</div>

			<div class="form-group row">
				<label for="date" class="col-sm-4 col-form-label">Date</label>
			    <div class="col-sm-8">
			      	<input type="date" class="form-control" name="date" autocomplete="off" required="true" id="date">
			    </div>
			</div>

			<div class="form-group row">
				<label for="hospital_name" class="col-sm-4 col-form-label">Hospital Name</label>
			    <div class="col-sm-8">
			      	<input type="text" class="form-control" name="hospital_name" style="text-transform: capitalize;" autocomplete="off" required="true" placeholder="Hospital Name" id="hospital_name">
			    </div>
			</div>
			
			<div class="form-group row">
			    <div class="col-sm-10">
			      <button type="submit" class="btn btn-dark" name="bookBed">Book bed</button>
			    </div>
			 </div>
		</form>     
		
	</div>


</body>
</html>