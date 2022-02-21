<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title>HealthEasy | Sign up</title>
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

		.button {
			display: inline-block;
			border-radius: 4px;
			background-color: #c23616;
			border: none;
			color: #FFFFFF;
			text-align: center;
			font-size: 28px;
			/*padding: 20px;*/
			width: 300px;
			transition: all 0.5s;
			cursor: pointer;
			margin: 5px;
			height: 70px;
		}

		.button span {
			cursor: pointer;
			display: inline-block;
			position: relative;
			transition: 0.5s;
		}

		.button span:after {
			content: '\00bb';
			position: absolute;
			opacity: 0;
			top: 0;
			right: -20px;
			transition: 0.5s;
		}

		.button:hover span {
			padding-right: 25px;
		}

		.button:hover span:after {
			opacity: 1;
			right: 0;
		}

		/* Centering the div*/
		.center {
			margin: auto;
			width: 30%;
			height: 500px;
			/*border: 5px ridge; #7f8fa6;
			background-color: #dcdde1; */
			padding: 5px;
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
	<br>

	<div class="center">               
		<div style="text-align: center;">
			<br><br>
			<h1>Register as...</h1><br>
			<button class="button" style=""><span><a href="registerHospital.php" target="_self" style="color: white; text-decoration: none;">Hospital </a></span></button> <br><br>
			<button class="button" style=""><span><a href="registerDoctor.php" target="_self" style="color: white; text-decoration: none;">Doctor </a></span></button> <br><br>
			<button class="button" style=""><span><a href="registerUser.php" target="_self" style="color: white; text-decoration: none;">User </a></span></button>
		</div>
		<br>
		<h5 style="text-align: center;">Already have an account? <a href="loginselect.php" target="_self" style="color: #192a56;">Log in</a></h5>
	</div>


</body>
</html>