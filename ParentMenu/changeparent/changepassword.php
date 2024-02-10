<?php
session_start();
$parentID=$_SESSION['ParentID'];
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","web2","web2","clever");
$sql= "UPDATE `parents` SET `username` = '$username', `password` = '$password' WHERE `parents`.`parentID` = $parentID";
$result=mysqli_query($con,$sql);

$_SESSION['username']=$username;
$_SESSION['password']=$password;
header('Location:../ParentMenu.php');

 ?>
