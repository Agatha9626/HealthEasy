<?php
	session_start();
	require_once ('dbConnect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>HealthEasy | Doctor Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
			width: 80%;
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
			<button type="button" class="btn btn-danger"><a href="logout.php" target="_self" style="color: white; text-decoration: none;">Log out</a></button>
		</p>
	</header>
	<br>
	<!--<p style="text-align:right; padding-right:30px;">
		<button type="button" class="btn btn-dark"><a href="patients.php" target="_self" style="color: white; text-decoration: none;">View patient information</a></button>
	</p> -->
	
	<br>

	<div class="center">    

		<h1 style="text-align: center;">Welcome</h1> &nbsp;

		<?php
			$connection = mysqli_connect("localhost","root","");
			$db = mysqli_select_db($connection,'isproject1');
			//echo "<pre>";
			//print_r($_SESSION);
			if (isset($_SESSION['doctor_details'])) {

				$username = $_SESSION['doctor_details']['username'];
				//$password = $_SESSION['doctor_details']['password'];
				//$email_address = $_SESSION['doctor_details']['email_address'];
				echo "Welcome $username";
				//echo "Welcome $email_address";

				$query = "SELECT * FROM doctor WHERE username='$username' ";
				$query_run = mysqli_query($connection,$query);

				while($row = mysqli_fetch_array($query_run)){
					?>
					<h2>Update information</h2>
					<form action="" method="POST" enctype="multipart/form-data">
						<!--<input type="hidden" name="nationalID" value="<?php //echo $row['nationalID']?>"/><br>
							<input type="text" name="profileImage" value="">
						<div class="form-group row">
							<label for="profileImage" class="col-sm-4 col-form-label">Profile Picture</label>
							<div class="col-sm-8">
								<input type="file" name="profileImage" id="profileImage" class="form-control">
							</div>
						</div> -->

						<div class="form-group row">
							<label for="doctor_name" class="col-sm-4 col-form-label">Name</label>
						    <div class="col-sm-8">
						      	<input type="text" class="form-control" name="doctor_name" autocomplete="off" required="true" style="text-transform: capitalize;" placeholder="Name" id="doctor_name" value="<?php echo $row['doctor_name'] ?>"/>
						    </div>
						</div>

						<div class="form-group row">
							<label for="speciality" class="col-sm-4 col-form-label">Speciality</label>
						    <div class="col-sm-8">
						      	<input type="text" class="form-control" name="speciality" autocomplete="off" style="text-transform: capitalize;" required="true" placeholder="speciality" id="speciality" value="<?php echo $row['speciality'] ?>">
						    </div>
						</div>

						<div class="form-group row">
							<label for="email_address" class="col-sm-4 col-form-label">Email Address</label>
						    <div class="col-sm-8">
						      	<input type="text" class="form-control" name="email_address" autocomplete="off" required="true" placeholder="example@gmail.com" id="email_address" value="<?php echo $row['email_address'] ?>">
						    </div>
						</div>

						<div class="form-group row">
							<label for="telephone_number" class="col-sm-4 col-form-label">Phone Number</label>
						    <div class="col-sm-8">
						      	<input type="text" class="form-control" name="telephone_number" autocomplete="off" required="true" placeholder="0710 123456" id="telephone_number" value="<?php echo $row['telephone_number'] ?>">
						    </div>
						</div>


						<div class="form-group row">
							<label for="county" class="col-sm-4 col-form-label">County</label>
						    <div class="col-sm-8">
						      	<input type="text" class="form-control" name="county" autocomplete="off" style="text-transform: capitalize;" required="true" placeholder="County" id="county" value="<?php echo $row['county'] ?>">
						    </div>
						</div>

						<div class="form-group row">
							<label for="working_hours" class="col-sm-4 col-form-label">Working hours</label>
						    <div class="col-sm-8">
						      	<input type="text" class="form-control" name="working_hours" autocomplete="off" style="text-transform: capitalize;" required="true" placeholder="e.g 9:00am-6:00pm" id="working_hours" value="<?php echo $row['working_hours'] ?>">
						    </div>
						</div>
										
						<div class="form-group row">
							<label for="username" class="col-sm-4 col-form-label">Username</label>
						    <div class="col-sm-8">
						      	<input type="text" class="form-control" name="username" autocomplete="off" required="true" placeholder="Username" id="username" value="<?php echo $row['username'] ?>">
						    </div>
						</div>

						<div class="form-group row">
							<label for="password" class="col-sm-4 col-form-label">Password</label>
						    <div class="col-sm-8">
						      	<input type="password" class="form-control" name="password" autocomplete="off" placeholder="********" id="password">
						    </div>
						</div>

						<div class="form-group row">
						    <div class="col-sm-10">
						      <button type="submit" class="btn btn-dark" name="update">Update</button>
						      <!--<button type="button" class="btn btn-danger" name="delete">Delete Account</button>-->
						    </div>
						</div>
					</form>
					<br>
					<?php
				}	
			}

			
		?>
	</div>

</body>
</html>

<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,'isproject1');

	if(isset($_POST['update'])){

		$doctor_name = $_POST['doctor_name'];
		$speciality = $_POST['speciality'];
		$email_address = $_POST['email_address'];
		$telephone_number = $_POST['telephone_number'];
		$county = $_POST['county'];
		$working_hours = $_POST['working_hours'];
		$username = $_POST['username'];

		$query = "UPDATE `doctor` SET doctor_name='$_POST[doctor_name]', speciality='$_POST[speciality]', email_address='$_POST[email_address]', telephone_number='$_POST[telephone_number]', county='$_POST[county]', working_hours='$_POST[working_hours]', username='$_POST[username]' WHERE username='$_POST[username]' ";
		$query_run = mysqli_query($connection,$query);

		if($query_run){
			echo '	';
		}
		else{
			echo '<script> alert("Data Not Updated)" </script>' ;
		}
	}

?>
