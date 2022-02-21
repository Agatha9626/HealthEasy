<?php

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>HealthEasy | Beds</title>
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
		.center {
			margin: auto;
			width: 80%;
			height: 500px;
			/*border: 5px ridge; #7f8fa6;
			background-color: #dcdde1; 
			padding: 10px; */
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

	<div class="center">

	<h1 style="text-align: center;">Hospital beds</h1> &nbsp;
	<h2>ICU hospital beds</h2>
	<div> 
		<form action="" method="POST">
			<input type="text" name="hospital_name" placeholder="Search hospital name" />
			<input type="submit" name="search1" value="Search">
		</form><br>
		<p>Search Results</p>
		<table class="table">
			<?php
			$connection = mysqli_connect("localhost","root","");
			$db = mysqli_select_db($connection,'isproject1');

			if(isset($_POST['search1'])){
				$hospital_name = $_POST['hospital_name'];

				$query = "SELECT * FROM `hospital` WHERE hospital_name='$hospital_name' ";
				$query_run = mysqli_query($connection,$query);

				while($row = mysqli_fetch_array($query_run)){
					?>
					
			<div class="col-md-4 mt-3">
				<div class="card">
					<img src="HospitalDP/<?php echo $row['profileImage']; ?>" style="padding-left: 5px;" width="160px" height="100px"  alt="Logo">
					<div class="card-body">
									
						<h2 class="card-title" style="text-transform: capitalize;"><?php echo $row['hospital_name'];?></h2>
						<h6 class="card-title" style="text-transform: capitalize;"><?php echo $row['county'];?></h6>
						<h6 class="card-title">Phone number: <?php echo $row['telephone_number'];?></h6>
						<h6 class="card-title">Email : <?php echo $row['email_address'];?></h6>
						<h6 class="card-title">Beds available: <?php echo $row['beds_available'];?></h6>
						<!--<p class="card-text"><button type="button" class="btn btn-dark" name="bookBed"><a href="bookBed.php" target="_blank" style="color: white; text-decoration: none;">Book bed</a></button></p>-->
					</div>
				</div>
			</div>
					<?php
				}
			}
			?>
		</table> 
	</div>
	<br><br>

	<div class="container py-1">
		<h2>All Hospitals</h2>
		<div class="row">
		<?php 
			require_once ('dbConnect.php');

			$link = connect();
			$sql = "SELECT * FROM hospital";
			//$returned_results = array();
			$result = mysqli_query($link,$sql);
			$check_bed = mysqli_num_rows($result) > 0;

			if($check_bed){
				while($row = mysqli_fetch_assoc($result)){
		?>

		<!--To change the columns change md-4 to another number -->
			<div class="col-md-4 mt-3">
				<div class="card">
					<img src="HospitalDP/<?php echo $row['profileImage']; ?>" style="padding-left: 5px;" width="160px" height="100px"  alt="Logo">
					<div class="card-body">
									
						<h2 class="card-title" style="text-transform: capitalize;"><?php echo $row['hospital_name'];?></h2>
						<h6 class="card-title" style="text-transform: capitalize;"><?php echo $row['county'];?></h6>
						<h6 class="card-title">Phone number: <?php echo $row['telephone_number'];?></h6>
						<h6 class="card-title">Email : <?php echo $row['email_address'];?></h6>
						<h6 class="card-title">Beds available: <?php echo $row['beds_available'];?></h6>
						<!--<p class="card-text"><button type="button" class="btn btn-dark" name="bookBed"><a href="bookBed.php" target="_blank" style="color: white; text-decoration: none;">Book bed</a></button></p>-->
					</div>
				</div>
			</div>

		<?php
											
				}
			}
			else{
				echo "No result found";
			}
		?>
			
		</div>
	</div>

</div>
	
</body>
</html>


