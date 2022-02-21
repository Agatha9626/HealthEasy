<?php
	session_start();
	require_once ('dbConnect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>HealthEasy | Profile</title>
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
			if (isset($_SESSION['hospital_details'])) {

				$username = $_SESSION['hospital_details']['username'];
				//$password = $_SESSION['hospital_details']['password'];
				//$email_address = $_SESSION['hospital_details']['email_address'];
				echo "Welcome $username";
				//echo "Welcome $email_address";

				$query = "SELECT * FROM hospital WHERE username='$username' ";
				$query_run = mysqli_query($connection,$query);

				while($row = mysqli_fetch_array($query_run)){
					?>
					<h1>Update information</h1>
					<form action="" method="POST" enctype="multipart/form-data">
						<!--<input type="hidden" name="nationalID" value="<?php //echo $row['nationalID']?>"/><br>
							<input type="text" name="profileImage" value="">-->

						<div class="form-group row">
							<label for="hospital_name" class="col-sm-4 col-form-label">Name</label>
						    <div class="col-sm-8">
						      	<input type="text" class="form-control" name="hospital_name" autocomplete="off" required="true" style="text-transform: capitalize;" placeholder="Name" id="hospital_name" value="<?php echo $row['hospital_name'] ?>"/>
						    </div>
						</div>

						<div class="form-group row">
							<label for="county" class="col-sm-4 col-form-label">County</label>
						    <div class="col-sm-8">
						      	<input type="text" class="form-control" name="county" autocomplete="off" style="text-transform: capitalize;" required="true" placeholder="County" id="county" value="<?php echo $row['county'] ?>">
						    </div>
						</div>

						<div class="form-group row">
							<label for="telephone_number" class="col-sm-4 col-form-label">Phone Number</label>
						    <div class="col-sm-8">
						      	<input type="text" class="form-control" name="telephone_number" autocomplete="off" required="true" placeholder="0710 123456" id="telephone_number" value="<?php echo $row['telephone_number'] ?>">
						    </div>
						</div>

						<div class="form-group row">
							<label for="email_address" class="col-sm-4 col-form-label">Email Address</label>
						    <div class="col-sm-8">
						      	<input type="text" class="form-control" name="email_address" autocomplete="off" required="true" placeholder="example@gmail.com" id="email_address" value="<?php echo $row['email_address'] ?>">
						    </div>
						</div>

						<div class="form-group row">
							<label for="beds_available" class="col-sm-4 col-form-label">Beds Available</label>
						    <div class="col-sm-8">
						      	<input type="text" class="form-control" name="beds_available" autocomplete="off" required="true" placeholder="Number of beds available" id="beds_available" value="<?php echo $row['beds_available'] ?>">
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

		$hospital_name = $_POST['hospital_name'];
		//$nationalID = $_POST['nationalID'];
		$county = $_POST['county'];
		$telephone_number = $_POST['telephone_number'];
		$email_address = $_POST['email_address'];
		$beds_available = $_POST['beds_available'];
		$username = $_POST['username'];

		$query = "UPDATE `hospital` SET hospital_name='$_POST[hospital_name]', county='$_POST[county]', telephone_number='$_POST[telephone_number]', email_address='$_POST[email_address]', beds_available='$_POST[beds_available]', username='$_POST[username]' WHERE username='$_POST[username]' ";
		$query_run = mysqli_query($connection,$query);

		if($query_run){
			echo '	';
		}
		else{
			echo '<script> alert("Data Not Updated)" </script>' ;
		}
	}

?>
