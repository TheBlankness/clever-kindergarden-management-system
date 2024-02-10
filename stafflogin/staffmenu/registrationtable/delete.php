<?php
$parentID = $_POST['parentID'];

$con=mysqli_connect("localhost","web2","web2","clever");
$sql = "DELETE FROM `parents` WHERE `parents`.`parentID` = $parentID";
$qry = mysqli_query($con,$sql);//run query

$con=mysqli_connect("localhost","web2","web2","clever");
$sql = "DELETE FROM `childinfo` WHERE `childinfo`.`parentID` = $parentID";
$qry = mysqli_query($con,$sql);//run query

header('Location:../staffmenu.php');

 ?>
