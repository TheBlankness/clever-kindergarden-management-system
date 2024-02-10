<?php
session_start();
if (empty($_SESSION['username'])){
		header ("Location: ../MainMenu.html");
		exit();
}


$username = $_SESSION['username'];
$password = $_SESSION['password'];

$con=mysqli_connect("localhost","web2","web2","clever");
$sql = 'SELECT * FROM `parents` WHERE username = "'.$username.'" and password = "'.$password.'"';
$qry = mysqli_query($con,$sql);//run query
$row = mysqli_fetch_assoc($qry);

$parentID = $row['parentID'];
$_SESSION['ParentID']=$parentID;
$fullname = $row['fullname'];
$email = $row['Email'];
$phone = $row['phone'];
$registered = $row['registered'];
$payment = $row['payment'];

$_SESSION['parentID'] = $parentID;


 ?>
 <!DOCTYPE html>
 <html lang="en" class="no-js">
 	<head>
 		<meta charset="UTF-8" />
 		<meta http-equiv="X-UA-Compatible" content="IE=edge">
 		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="../icon1.ico" />
 		<title>Parent Menu</title>
 		<link rel="shortcut icon" href="../favicon.ico">
 		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
 		<link rel="stylesheet" type="text/css" href="css/demo.css" />
 		<link rel="stylesheet" type="text/css" href="css/component.css" />
 		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 		<script src="js/modernizr.custom.25376.js"></script>
 	</head>
 	<body>
 		<div id="perspective" class="perspective effect-rotatetop">
 			<div class="container">
 				<div class="wrapper"><!-- wrapper needed for scroll -->


 					<header class="codrops-header">
						<?php
				echo "<h1>Welcome<span>$fullname</span></h1>";
				echo "<h1>User Information<span>Email: $email</span><span>Phone: $phone</span></h1>";
				echo "<h1>Registration Status<span>$registered</span></h1>";
				echo "<h1>Payment Status<span>$payment</span></h1>";
				 ?>

 					</header>

 					<div class="main clearfix w3-center">
 						<div class="w3-container">
				<h1 class="w3-container w3-center">Click the button below to open the menu</h1>

 						</div>
						<div class="w3-container">

 							<p><button id="showMenu" class="w3-xlarge">Open Menu</button></p>
 						</div>

 					</div><!-- /main -->




 				</div><!-- wrapper -->
 			</div><!-- /container -->
 			<nav class="outer-nav bottom horizontal">
				<a href="logout.php" class="icon-home">Logout</a>
 				<a href="childPortfolio/childport.php" class="icon-image">Child Portfolio</a>
				<a href="changeparent/changepassword.html" class="icon-lock">Change Password</a>
				<a href="changeparent/changeuser.php" class="icon-news">Change Userdata</a>
				<a href="payment/pay.php" class="icon-mail">Edit Payment</a>
				<!-- <a href="#" class="icon-star">Favorites</a>
				<a href="#" class="icon-mail">Messages</a>
				<a href="#" class="icon-home">Home</a>
				<a href="#" class="icon-news">News</a>
				<a href="#" class="icon-image">Images</a>-->
 			</nav>
 		</div><!-- /perspective -->
 		<script src="js/classie.js"></script>
 		<script src="js/menu.js"></script>
 	</body>
 </html>
