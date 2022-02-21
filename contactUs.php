<?php 
	require_once ('dbConnect.php');

	$sql = "select * from message";
	//$sql = "select * from "
	
	
	if(isset($_POST['submit_message'])){
		
		$email_address = $_POST['email_address'];
		$message = $_POST['message'];
		 
		$sql = "INSERT INTO `message`(`message_id`, `email_address`, `message`) VALUES (null,'$email_address','$message')";

		InsertData($sql);

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>HealthyEasy | Contact Us</title>
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
			font-size: 17px;
		}
	</style>

</head>

<body style="padding-top: 0px; background-color: #dfe4ea;">

	<header>
      <a href="homePage.php" target="_self" style="color: white; text-decoration: none; ">Home</a> &nbsp;&nbsp;&nbsp;&nbsp;
      <a href="contactUs.php" target="_blank" style="color: white; text-decoration: none; ">Contact Us</a> &nbsp;&nbsp;&nbsp;&nbsp;
      <a href="aboutUs.php" target="_blank" style="color: white; text-decoration: none; ">About Us</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  

      <button type="button" class="btn btn-secondary"><a href="signUp.php" target="_self" style="color: white; text-decoration: none;">Sign up</a></button> &nbsp;
      <button type="button" class="btn btn-info"><a href="loginselect.php" target="_self" style="color: white; text-decoration: none;">Log in</a></button>
  </header>
	<br><br>

	<div class="center">    

		<h1 style="text-align: center;">Contact us</h1> &nbsp;
		<!--<h6>Connect with us</h6>-->

		<form action="contactUs.php" method="post">

			<div class="form-group row">
				<label for="email_address" class="col-sm-4 col-form-label">Email Address</label>
			    <div class="col-sm-8">
			      	<input type="text" class="form-control" autocomplete="off" name="email_address" required="true" placeholder="example@gmail.com" id="email_address">
			    </div>
			</div>

			<div class="form-group row">
				<label for="message" class="col-sm-4 col-form-label">Comment</label>
			    <div class="col-sm-8">
			      	<textarea type="text" style="text-transform: capitalize;" class="form-control" name="message" required="true" placeholder="Type here..." id="message"></textarea>
			    </div>
			</div>
			  
			<div class="form-group row">
			    <div class="col-sm-10">
			      <button type="submit" class="btn btn" style="background-color: #1E212D; color: white;" name="submit_message">Submit</button>
			    </div>
			</div>
		</form>

		     
		
	</div>


</body>
</html>