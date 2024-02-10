<?php
session_start();
$parentID=$_SESSION['ParentID'];
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$phone=$_POST['phone'];


$con=mysqli_connect("localhost","web2","web2","clever");
$sql= "UPDATE `parents` SET `fullname` = '$fullname', `Email` = '$email', `phone` = '$phone' WHERE `parents`.`parentID` = $parentID";
$result=mysqli_query($con,$sql);




header('Location:../ParentMenu.php');

 ?>
