<?php
session_start();
if (!(isset($_SESSION['username']) && $_SESSION['username'] != ''))
	header('Location: ../stafflogin.html');

  $username = $_SESSION['username'];
  $password = $_SESSION['password'];

  $con=mysqli_connect("localhost","web2","web2","clever");
  $sql = 'SELECT * FROM `staff` WHERE username = "'.$username.'" and password = "'.$password.'"';
  $qry = mysqli_query($con,$sql);//run query
  $row = mysqli_fetch_assoc($qry);

  $fullname = $row['fullname'];

 ?>
 <!DOCTYPE html>
 <html lang="en" class="no-js">
 	<head>
 		<meta charset="UTF-8" />
 		<meta http-equiv="X-UA-Compatible" content="IE=edge">
 		<meta name="viewport" content="width=device-width, initial-scale=1">
 		<title>Staff Menu</title>
 		<meta name="description" content="Perspective Page View Navigation: Transforms the page in 3D to reveal a menu" />
 		<meta name="keywords" content="3d page, menu, navigation, mobile, perspective, css transform, web development, web design" />
 		<meta name="author" content="Codrops" />
 		<link rel="shortcut icon" href="../favicon.ico">
 		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
 		<link rel="stylesheet" type="text/css" href="css/demo.css" />
 		<link rel="stylesheet" type="text/css" href="css/component.css" />
 		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 		<!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load -->
 		<script src="js/modernizr.custom.25376.js"></script>
 	</head>
 	<body>
 		<div id="perspective" class="perspective effect-rotateleft">
 			<div class="container">
 				<div class="wrapper"><!-- wrapper needed for scroll -->
 					<!-- Top Navigation -->

 					<header class="codrops-header">
            <?php
echo "<h1>Welcome<span>$fullname</span></h1>";

$con=mysqli_connect("localhost","web2","web2","clever");
$sql = "SELECT * FROM `parents` WHERE `registered` = 'Pending'";
$qry = mysqli_query($con,$sql);//run query
$pendingregisters = mysqli_num_rows($qry);

echo "<h1>Pending Registrations<span>$pendingregisters</span></h1>";

$con=mysqli_connect("localhost","web2","web2","clever");
$sql = "SELECT * FROM `parents` WHERE `payment` = 'Pending'";
$qry = mysqli_query($con,$sql);//run query
$pendingpayments = mysqli_num_rows($qry);

echo "<h1>Pending Payments<span>$pendingpayments</span></h1>";

$con=mysqli_connect("localhost","web2","web2","clever");
$sql = "SELECT * FROM `parents` WHERE `registered` = 'Approved' and `payment` = 'Approved'";
$qry = mysqli_query($con,$sql);//run query
$registeredusers = mysqli_num_rows($qry);

echo "<h1>Registered Users<span>$registeredusers</span></h1>";

             ?>
 					</header>
 					<div class="main clearfix">

 						<div class="main clearfix w3-center">
 	 						<div class="w3-container">
 					<h1 class="w3-container w3-center">Click the button below to open the menu</h1>

 	 						</div>
 							<div class="w3-container">

 	 							<p><button id="showMenu" class="w3-xlarge">Open Menu</button></p>
 	 						</div>

 	 					</div><!-- /main -->


 					</div><!-- /main -->
 				</div><!-- wrapper -->
 			</div><!-- /container -->
 			<nav class="outer-nav right vertical">
 				<a href="logout.php" class="icon-home">Logout</a>
        <a href="tables/pending.php" class="icon-star">Pending Registrations</a>
				<a href="tables/payments.php" class="icon-mail">Receive Payments</a>
 				<a href="registrationtable/registrations.php" class="icon-news">View Registrations</a>


 			</nav>
 		</div><!-- /perspective -->
 		<script src="js/classie.js"></script>
 		<script src="js/menu.js"></script>
 	</body>
 </html>
