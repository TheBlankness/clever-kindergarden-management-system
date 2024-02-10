<?php
session_start();

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<title>Change Userdata</title>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 <!--===============================================================================================-->
 	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="css/util.css">
 	<link rel="stylesheet" type="text/css" href="css/main.css">
 <!--===============================================================================================-->
 </head>
 <body>


 	<div class="container-contact100">
 		<div class="wrap-contact100">
 			<form class="contact100-form validate-form" method="post" action="changeuserinfo.php">
 				<span class="contact100-form-title">
 					Fill in to change you data
 				</span>

 				<label class="label-input100" for="email">Full Name *</label>
 				<div class="wrap-input100 validate-input">
 					<input id="fullname" class="input100" type="text" name="fullname" placeholder="Eg. Name Jeff">
 					<span class="focus-input100"></span>
 				</div>


 				<label class="label-input100" for="email">Email Address *</label>
 				<div class="wrap-input100 validate-input">
 					<input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
 					<span class="focus-input100"></span>
 				</div>

 				<label class="label-input100" for="phone">Phone Number</label>
 				<div class="wrap-input100">
 					<input id="phone" class="input100" type="text" name="phone" placeholder="Eg. 0123456789">
 					<span class="focus-input100"></span>
 				</div>


 				<div class="container-contact100-form-btn">
 					<input class="contact100-form-btn" type="submit" name="submit">
 				</div>
 			</form>
 		</div>
 	</div>



 <!--===============================================================================================-->
 	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
 <!--===============================================================================================-->
 	<script src="vendor/animsition/js/animsition.min.js"></script>
 <!--===============================================================================================-->
 	<script src="vendor/bootstrap/js/popper.js"></script>
 	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
 <!--===============================================================================================-->
 	<script src="vendor/select2/select2.min.js"></script>
 <!--===============================================================================================-->
 	<script src="vendor/daterangepicker/moment.min.js"></script>
 	<script src="vendor/daterangepicker/daterangepicker.js"></script>
 <!--===============================================================================================-->
 	<script src="vendor/countdowntime/countdowntime.js"></script>
 <!--===============================================================================================-->
 	<script src="js/main.js"></script>


 <!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
 <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());

   gtag('config', 'UA-23581568-13');
 </script>

 </body>
 </html>
