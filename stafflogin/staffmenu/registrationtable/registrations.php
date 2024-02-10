<?php

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<title>Registration List</title>
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
      <h2 class="w3-display-topleft"><a href="../staffmenu.php">< Back</a></h2>
 		<div class="container-table100">
 			<div class="wrap-table100">
 				<div class="table100 ver1">
 					<div class="table100-firstcol">
 						<table>
 							<thead>
 								<tr class="row100 head">
 									<th class="cell100 column1" style='height: 50px;'>Child Name</th>
 								</tr>
 							</thead>
 							<tbody>



<?php

$con=mysqli_connect("localhost","web2","web2","clever");
$sql = "SELECT * FROM `parents` WHERE `registered` = 'Approved' and `payment` = 'Approved'";
$qry = mysqli_query($con,$sql);//run query

$con=mysqli_connect("localhost","web2","web2","clever");
$sql2 = 'SELECT * FROM `childinfo`';
$qry2 = mysqli_query($con,$sql2);//run query

while($row=mysqli_fetch_assoc($qry) and $row2=mysqli_fetch_assoc($qry2) )//repeat for each record
  {
    $fullname2=$row2['fullname'];
echo "	<tr class='row100 body'>";
echo "	<td class='cell100 column1' style='height: 200px;'> <br>$fullname2<br><br> </td>";
echo "	</tr>";
}
 ?>


 							</tbody>
 						</table>
 					</div>

 					<div class="wrap-table100-nextcols js-pscroll">
 						<div class="table100-nextcols">
 							<table>
 								<thead>
 									<tr class="row100 head">
 										<th class="cell100 column2" style='height: 50px;'>Parent Name</th>
 										<th class="cell100 column3" style='height: 50px;'>Child Potrait</th>
 										<th class="cell100 column4" style='height: 50px;'>Delete</th>
 										<th class="cell100 column5" style='height: 50px;'>Plan</th>
 										<th class="cell100 column6" style='height: 50px;'>Age</th>
 										<th class="cell100 column7" style='height: 50px;'>Address</th>
 										<th class="cell100 column8" style='height: 50px;'>Zip</th>
                    	<th class="cell100 column8" style='height: 50px;'>City</th>
                      	<th class="cell100 column8" style='height: 50px;'>State</th>
 									</tr>
 								</thead>
 								<tbody>

<?php
$con=mysqli_connect("localhost","web2","web2","clever");
$sql = "SELECT * FROM `parents` WHERE `registered` = 'Approved' and `payment` = 'Approved'";
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
      $age=$row2['age'];
    $registered=$row['payment'];
    $username=$row['username'];
      $address=$row2['address'];
        $zip=$row2['zip'];
          $city=$row2['city'];
          $state=$row2['state'];
            $ChildID=$row2['ChildID'];
echo "<tr class='row100 body'>";
echo "<td class='cell100 column2' style='height: 200px;' >$fullname1</td>";

$picturetlink = "http://localhost/WebProject/ParentMenu/childPortfolio/uploads/".$ChildID.".jpg";

echo "<td class='cell100 column3' style='width: 260px;padding-left: 40px;'><a href='$picturetlink'><img src='$picturetlink' alt='Smiley face' height='63' width='63' ></a></td>";
echo "<td class='cell100 column4' style='height: 200px;'>";
echo '<form action="delete.php" method="post">';
echo "<input type='hidden' value='$parentID' name='parentID'>";
echo "<input class='w3-button w3-pink w3-round-small w3-hover-red' type='submit' name='deleteCarButton' value='Delete'>";
echo "</td>";
echo "<td class='cell100 column5' style='height: 200px;'>$plans</td>";
echo "<td class='cell100 column6' style='height: 200px;'>$age</td>";
echo "<td class='cell100 column7' style='height: 200px;'>$address</td>";
echo "<td class='cell100 column8' style='height: 200px;'>$zip</td>";
echo "<td class='cell100 column8' style='height: 200px;'>$city</td>";
echo "<td class='cell100 column8' style='height: 200px;'>$state</td>";
echo "</tr>";
}
 ?>

 								</tbody>
 							</table>
 						</div>
 					</div>
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
 	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 	<script>
 		$('.js-pscroll').each(function(){
 			var ps = new PerfectScrollbar(this);

 			$(window).on('resize', function(){
 				ps.update();
 			})

 			$(this).on('ps-x-reach-start', function(){
 				$(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
 			});

 			$(this).on('ps-scroll-x', function(){
 				$(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
 			});

 		});




 	</script>
 <!--===============================================================================================-->
 	<script src="js/main.js"></script>

 </body>
 </html>
