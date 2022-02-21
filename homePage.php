<!DOCTYPE html>
<html lang="en">
<head>
	<title>HealthyEasy | Home Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/00e96782cf.js" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 

	<style type="text/css">
		/* CSS for the header */
		header{
			background-color: #192a56;
			height: 50px;
			padding-top: 7px;
			padding-left: 100px;
		}
    body{
      font-family: Georgia;
      font-size: 18px;
    }
    footer{
      background-color: #95afc0;
      height: 200px;
      padding-top: 7px;
      padding-left: 150px;
      padding-right: 150px;
      margin-top: ;
      border-top: 5px double;
    }
    /* Social media icons */
    .fa {
      padding: 10px;
      font-size: 20px;
      width: 50px;
      text-align: center;
      text-decoration: none;
      margin: 5px 2px;
      border-radius: 50%;
    }
    .fa:hover {
      opacity: 0.9;
      text-decoration: none;
    }
    .fa-facebook {
      background: #3B5998;
      color: white;
    }
    .fa-twitter {
      background: #55ACEE;
      color: white;
    }
    .fa-google {
      background: #dd4b39;
      color: white;
    }
    .fa-instagram {
      background: #125688;
      color: white;
    }

	</style>

</head>

<body style="padding-top: 0px; background-color: #dfe4ea;">

	<header>
      <a href="homePage.php" target="_self" style="color: white; text-decoration: none; ">Home</a> &nbsp;&nbsp;&nbsp;&nbsp;
      <a href="contactUs.php" target="_blank" style="color: white; text-decoration: none; ">Contact Us</a> &nbsp;&nbsp;&nbsp;&nbsp;
      <a href="aboutUs.php" target="_blank" style="color: white; text-decoration: none; ">About Us</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

      <button type="button" id="btn" class="btn btn-secondary"><a href="signUp.php" target="_blank" style="color: white; text-decoration: none; font-size: 17px;" >Sign up</a></button> &nbsp;&nbsp;
      <button type="button" id="btn" class="btn btn-info"><a href="loginselect.php" target="_blank" style="color: white; text-decoration: none; font-size: 17px;">Log in</a></button>
  </header>

<div >

	<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/beds.jpg" style="height: 575px;" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <div style="background-color: #dcdde1; opacity: 0.8;">
            <h5 style="color:black; font-size: 48px; font-family: georgia;"><strong>SEARCH FOR VACANT ICU HOSPITAL BEDS</strong></h5>
          </div>
          <p style="color:black;"><button type="button" class="btn btn-light btn-lg" style="background-color: #130f40; color: white;"><a href="beds.php" target="_blank" style="text-decoration: none; color: white;">Find beds</a></button></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/doctors.jpeg" style="height: 575px;" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <div style="background-color: #dcdde1; opacity: 0.8;">
            <h5 style="color:black; font-size: 48px; font-family: georgia;"><strong>FIND AVAILABLE DOCTORS</strong></h5>
          </div>
          <p style="color:black;"><button type="button" class="btn btn-light btn-lg" style="background-color: #130f40; color: white;"><a href="doctors.php" target="_blank" style="text-decoration: none; color: white;">Find doctors</a></button></p>

        </div>
      </div>
      <div class="carousel-item">
        <img src="images/record1.jpg" style="height: 575px;" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <div style="background-color: #dcdde1; opacity: 0.8;">
            <h5 style="color:black; font-size: 48px; font-family: georgia;"><strong>CREATE AN ACCOUNT</strong></h5>
          </div>
          <p style="color:black;"><button type="button" class="btn btn-light btn-lg" style="background-color: #130f40; color: white;"><a href="signUp.php" target="_blank" style="text-decoration: none; color: white;">Sign up</a></button></p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<footer>
  <br>
  <p>
    Follow us on: <br>
    <a href="https://en-gb.facebook.com/" class="fa fa-facebook" target="_blank"></a>
    <a href="https://twitter.com/?lang=en" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-google"></a>
    <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
  </p>
  
</footer>

</div>


</body>
</html>