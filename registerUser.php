<?php 
	session_start();
	require_once ('dbConnect.php');

	$sql = "select * from user";
	
	
	if(isset($_POST['submit_reg'])){

		$profileImageName = time() . '_' . $_FILES['profileImage']['name'];
		$target = 'UserDP/' . $profileImageName;
		move_uploaded_file($_FILES['profileImage']['tmp_name'], $target);
		
		$full_name = $_POST['full_name'];
		$nationalID = $_POST['nationalID'];
		$county = $_POST['county'];
		$DOB = $_POST['DOB'];
		$gender = $_POST['gender'];
		$height = $_POST['height'];
		$weight = $_POST['weight'];
		$email_address = $_POST['email_address'];
		$telephone_number = $_POST['telephone_number'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$hashed_password=hashPassword($password);

		//$hashed_password=hashPassword($password);
		//echo"The password $password is an its hash is $hashed_password";
		 


		//$sql = "INSERT INTO `register`(`id`, `firstname`, `lastname`, `email`, `password`) VALUES (null,'$firstname','$lastname','$email','$password')";

		$sql = "INSERT INTO `user`(`user_id`, `profileImage`,`full_name`, `nationalID`, `county`, `DOB`, `gender`, `height`, `weight`, `email_address`, `telephone_number`, `username`, `password`) VALUES (null,'$profileImageName','$full_name', '$nationalID', '$county','$DOB','$gender','$height','$weight','$email_address','$telephone_number', '$username', '$hashed_password')";

		InsertData($sql);

		$_SESSION['user_details'] = array('user_id'=>$user_id, 'profileImage'=>$profileImageName, 'full_name'=>$full_name, 'nationalID'=>$nationalID, 'county'=>$county, 'DOB'=>$DOB, 'gender'=>$gender, 'height'=>$height, 'weight'=>$weight, 'email_address'=>$email_address, 'telephone_number'=>$telephone_number, 'username'=>$username, 'password'=>$password);

		header("Location: userProfile.php");

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
	<title>User | Sign up</title>
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

		<h1 style="text-align: center;">Register User</h1> &nbsp;

		<form action="registerUser.php" method="post" enctype="multipart/form-data">

			<div class="form-group row">
				<label for="profileImage" class="col-sm-4 col-form-label">Profile Picture</label>
				<div class="col-sm-8">
					<input type="file" name="profileImage" id="profileImage" class="form-control">
				</div>
			</div>

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
				<label for="county" class="col-sm-4 col-form-label">County</label>
			    <div class="col-sm-8">
			      	<input type="text" class="form-control" name="county" style="text-transform: capitalize;" autocomplete="off" required="true" placeholder="County" id="county">
			    </div>
			</div>

			<div class="form-group row">
				<label for="DOB" class="col-sm-4 col-form-label">Date of birth</label>
			    <div class="col-sm-8">
			      	<input type="date" class="form-control" name="DOB" autocomplete="off" required="true" id="DOB">
			    </div>
			</div>

			<div class="form-group row">
				<label for="gender" class="col-sm-4 col-form-label">Gender</label>
			    <div class="col-sm-8">
			      	<input list="gender" class="form-control" name="gender">
						  <datalist id="gender">
						    <option value="Female">
						    <option value="Male">
						    <option value="Other">
						  </datalist>
			      	</input>
			      	
			    </div>
			</div>

			<div class="form-group row">
				<label for="height" class="col-sm-4 col-form-label">Height</label>
			    <div class="col-sm-8">
			      	<input type="text" class="form-control" name="height" autocomplete="off" required="true" placeholder="Height" id="height">
			    </div>
			</div>

			<div class="form-group row">
				<label for="weight" class="col-sm-4 col-form-label">Weight</label>
			    <div class="col-sm-8">
			      	<input type="text" class="form-control" name="weight" autocomplete="off" required="true" placeholder="Weight" id="weight">
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

		<p style="text-align: center;">Already have an account? <a href="loginUser.php">Log in</a></p>
		<br><br>     
		
	</div>


</body>
</html>