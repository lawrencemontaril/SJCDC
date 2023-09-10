<!DOCTYPE html>
<html lang="en">
<head>
<head>
	<!-- Page title -->
	<title>SJCDC - Status</title>
	<!-- Page icon -->
	<link rel="icon" href="images/logo.png">
	<!-- Link stylesheet -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<!-- Raleway font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>

<!-- SJCDC STATUS -->
<!-- PATH: SJCDC/status.php -->

<header>
<!-- The bar used for navigation across webpages -->
<div id="navbar">
	<div class="logo">
		<a href="homepage.html"><img src="images/logo.png" alt="logo"></a>
	</div>
	
	<nav>
		<ul class="nav_links">
			<li><a href="homepage.html">HOME</a></li>
			<li><a href="bed.html">BASIC EDUCATION</a></li>
			<li><a href="shs.html">SENIOR HIGH SCHOOL</a></li>
			<li><a href="college.html">COLLEGE</a></li>
		</ul>
	</nav>
	
	<a class="enroll" href="homepage.html">LOG OUT</a>
</div>
</header>

<main>
<?php 
  $emailAddress = $_POST["emailAddress"];
  $password = $_POST["password"];

  if ($emailAddress == "lawrencemontaril@gmail.com" && $password == "1234") {
    $firstName = "Lawrence";
    $lastName = "Montaril";
    $status = "Assessed. Go on-site to enroll!";
  } else if ($emailAddress == "kimgabrielmagan@gmail.com" && $password == "1234") {
    $firstName = "Kim Gabriel";
    $lastName = "Magan";
    $status = "Assessing.";
  } else if ($emailAddress == "jakeamora@gmail.com" && $password == "1234") {
    $firstName = "Jake Carl Marwin";
    $lastName = "Amora";
    $status = "Assessed.";
  } else if ($emailAddress == "jasperjongarcia@gmail.com" && $password == "1234") {
    $firstName = "Jasper Jon";
    $lastName = "Garcia";
    $status = "Asessing.";
  } else {
    $isError = true;
    $error = "Username or password is incorrect. Please try again";
  }
?>
<style>
  body {
		background: url("images/enrollment-bg.jpg") center/cover no-repeat fixed;
	}
  .status {
    margin-top: 40vh;
    background-color: #226532;
    width: 100%;
    padding: 1rem 25%;
  }
  .status h4, .status h3 {
    text-align: center;
    padding: 0.5rem;
    color: white;
  }
  .status a {
    color: black;
    background-color: white;
    border-radius: 0.25rem;
    padding: 0.5rem;
    text-align: center;
  }
  .status-child {
    background-color: white;
    padding: 0.5rem;
    border-radius: 0.25rem;
    display: block;
    margin: 0.5rem;
  }
</style>

<div class="status">
  <?php
  if($isError) {
    echo "<style>.status-child { display: none; } .status h4 { display: none; }</style>";
    echo "<h3>$error</h3>";
    echo "<center><a href=\"login.php\">Try again</a></center>";
  }
  ?>
  <h4>Your Pre-registration Status</h4>
  <div class="status-child">
    <p><b>Name:</b> <?php echo "$firstName ", "$lastName" ?></p>
  </div>
  <div class="status-child">
    <p><b>Status:</b> <?php echo "$status" ?></p>
  </div>
</div>

<footer>
	<div>
		<p>St. Jude College Dasmarinas &COPY; 2022. All Rights Reserved.</p>
		<p>Contact us: (046) 417-5232 | 0917-630-1064</p>
		<p>Address: Carlos Trinidad Avenue, Salitran IV City of Dasmarinas Cavite</p>
	</div>

	<p><b>Developers:</b></p>
	<div style="padding-top: 0.5rem;">
		<p>Lawrence Montaril &nbsp;|&nbsp;  09123456789</p>
		<p>Kim Gabriel Magan &nbsp;|&nbsp; 09123456789</p>
		<p>Jasper Jon Garcia &nbsp;|&nbsp; 09123456789</p>
		<p>Jake Carl Marwin Amora &nbsp;|&nbsp; 09123456789</p>
	</div>
</footer>
</main>
</body>
</html>