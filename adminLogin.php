<?php

	session_start();
	require_once ('dbConnect.php');

	if(isset($_POST['submit_login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$hashed_password=hashPassword($password);

		$sql = "select * from admin where username='$username' and password='$hashed_password' ";

		$admin_login = GetData($sql);

		if (count($admin_login)>0) {
			$admin_id = $admin_login[0]['admin_id'];
			$username = $admin_login[0]['username'];

			$_SESSION['admin_details'] = array('admin_id'=>$admin_id, 'username'=>$username);

			header("Location: adminDashboard.php");

		} else{
			echo "Invalid username or password";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Log in | User</title>
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
	<br>

	<div class="center">    

		<h1 style="text-align: center;">Log in</h1> &nbsp;

		<form action="adminLogin.php" method="post">
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
			      <button type="submit" class="btn btn-dark" name="submit_login">Log in</button>
			    </div>
			 </div>
		</form>
		<p>Don't have an account? <a href="adminReg.php">Sign up</a></p>     
		
	</div>


</body>
</html>