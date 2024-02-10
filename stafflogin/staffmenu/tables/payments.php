<?php
session_start();
if (!(isset($_SESSION['username']) && $_SESSION['username'] != ''))
	header('Location: ../stafflogin.html');

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<title>Payments</title>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 <!--===============================================================================================-->
 	<link rel="icon" type="image/png" href="../../../icon1.ico" />
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="css/util.css">
 	<link rel="stylesheet" type="text/css" href="css/main.css">
 <!--===============================================================================================-->
 </head>
 <body>

 	<div class="limiter">
 		<div class="container-table100">
            <h2 class="w3-display-topleft"><a href="../staffmenu.php">< return to menu</a></h2>
 			<div class="wrap-table100">
 				<div class="table100">
 					<table>
 						<thead>
 							<tr class="table100-head">
 								<th style="width: 260px;padding-left: 40px;">Parent Name</th>
 								<th >Child Name</th>
 								<th >Phone</th>
 								<th >Email</th>
 								<th >Plan</th>
 								<th >Receipts</th>
 									<th style='padding-left: 40px;'>Approval</th>
 							</tr>
 						</thead>
 						<tbody>
              <?php
              $con=mysqli_connect("localhost","web2","web2","clever");
              $sql = 'SELECT * FROM `parents`';
              $qry = mysqli_query($con,$sql);//run query

              $con=mysqli_connect("localhost","web2","web2","clever");
              $sql2 = 'SELECT * FROM `childinfo`';
              $qry2 = mysqli_query($con,$sql2);//run query

              while($row=mysqli_fetch_assoc($qry) and $row2=mysqli_fetch_assoc($qry2) )//repeat for each record
                {
                  $fullname1=$row['fullname'];
                  $parentID=$row['parentID'];
                  $fullname2=$row2['fullname'];
                  $phone=$row['phone'];
                  $email=$row['Email'];
                  $plans=$row2['plans'];
                  $registered=$row['payment'];
                  $username=$row['username'];
              echo "<tr>";
              echo '<td style="width: 260px;padding-left: 40px;">'.$fullname1.'</td>';
              echo "	<td>$fullname2</td>";
              echo "<td >$phone</td>";
              echo "	<td >$email</td>";
              echo "	<td style='padding-left: 40px;'>$plans</td>";

              $receiptlink = "http://localhost/WebProject/register/receipts/".$parentID.".jpg";

echo "<td style='padding-left: 30px;'><a href='$receiptlink'><img src='$receiptlink' alt='Smiley face' height='42' width='42'></a></td>";

              if($registered == "Pending" ){
              echo "	<td style='padding-left: 40px;'><a href='approve_payment.php?approve=yes&parentID=$parentID&email=$email&fullname=$fullname1' style='color: #00FF00;'>Approve</a> / <a href='approve_payment.php?approve=no&parentID=$parentID&email=$email&fullname=$fullname1' style='color: #FF0000;'>Decline</a></td>";
              }else {
              echo "	<td style='padding-left: 40px;'>$registered</td>";
              }
              echo "		</tr>";
              }
               ?>
 						</tbody>
 					</table>
 				</div>
 			</div>
 		</div>
 	</div>




 <!--===============================================================================================-->
 	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
 <!--===============================================================================================-->
 	<script src="vendor/bootstrap/js/popper.js"></script>
 	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
 <!--===============================================================================================-->
 	<script src="vendor/select2/select2.min.js"></script>
 <!--===============================================================================================-->
 	<script src="js/main.js"></script>

 </body>
 </html>
