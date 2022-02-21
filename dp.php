<?php 
	require_once ('dbConnect.php');

	$sql = "select * from dp";
	//$sql = "select * from "
	
	
	if(isset($_POST['submit'])){
		
		//The time() .'_'. adds the timestamp before every image to avoid the names from clashing
		$profileimage = time() . '_' . $_FILES['profileimage']['name'];
		$name = $_POST['name'];

		$target = 'UserProfilepictures/'

		move_uploaded_file(filename, destination)
		 
		$sql = "INSERT INTO `dp`(`id`, `profileimage`, `name`) VALUES (null,'$profileimage','$name')";

		InsertData($sql);

	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>HealthEasy | Beds</title>
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

		<h1 style="text-align: center;">Available hospital beds</h1> &nbsp;

		<form action="dp.php" method="post">	
			<div class="form-group row">
				<label for="profileimage" class="col-sm-4 col-form-label">Profile Image</label>
			    <div class="col-sm-8">
			      	<input type="file" class="form-control" name="profileimage" id="profileimage">
			    </div>
			</div>

			<div class="form-group row">
				<label for="name" class="col-sm-4 col-form-label">Name</label>
			    <div class="col-sm-8">
			      	<textarea type="text" class="form-control" name="name" required="true" placeholder="Name..." id="name"></textarea>
			    </div>
			</div>
			  
			<div class="form-group row">
			    <div class="col-sm-10">
			      <button type="submit" class="btn btn" style="background-color: #1E212D; color: white;" name="submit">Submit</button>
			    </div>
			</div>

		</form>     
		
	</div>


</body>
</html>