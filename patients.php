<?php

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>HealthEasy | Patients</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/00e96782cf.js" crossorigin="anonymous"></script>

	<style type="text/css">
		header{
			background-color: #192a56;
			height: 50px;
			padding-top: 7px;
			padding-left: 150px;
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
      <a href="homePage.php" target="_self" style="color: white; text-decoration: none; ">Home</a> &nbsp;&nbsp;&nbsp;&nbsp;
      <a href="contactUs.php" target="_blank" style="color: white; text-decoration: none; ">Contact Us</a> &nbsp;&nbsp;&nbsp;&nbsp;
      <a href="aboutUs.php" target="_blank" style="color: white; text-decoration: none; ">About Us</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  

      <button type="button" class="btn btn-secondary"><a href="signUp.php" target="_blank" style="color: white; text-decoration: none;">Sign up</a></button> &nbsp;
      <button type="button" class="btn btn-info"><a href="loginselect.php" target="_blank" style="color: white; text-decoration: none;">Log in</a></button>
  </header>
	<br>

	<h1 style="text-align: center;">Patients</h1> &nbsp;

	<div class="container py-1">
		<div class="row">
		<?php 
			require_once ('dbConnect.php');

			$link = connect();
			$sql = "SELECT * FROM user";
			//$returned_results = array();
			$result = mysqli_query($link,$sql);
			$check_user = mysqli_num_rows($result) > 0;

			if($check_user){
				while($row = mysqli_fetch_assoc($result)){
		?>

		<!--To change the columns change md-4 to another number -->
			

		<?php
											
				}
			}
			else{
				echo "No result found";
			}
		?>
			
		</div>
	</div>
	
</body>
</html>


<!--<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,'isproject1');

	if(isset($_POST['bookBed'])){

		$query = "UPDATE `hospital` SET beds_available='[beds_available-1]' WHERE username='$_POST[username]' ";
		$query_run = mysqli_query($connection,$query);

		if($query_run){
			echo '	';
		}
		else{
			echo '<script> alert("Data Not Updated)" </script>' ;
		}
	}

?>-->
