<?php
session_start();

$_SESSION['username']=$_POST['username'];
$_SESSION['password']=$_POST['password'];

$username=$_POST['username'];
$password=$_POST['password'];

$con=mysqli_connect("localhost","web2","web2","clever");
$sql= 'SELECT * FROM `parents` WHERE username = "'.$username.'" and password = "'.$password.'"';
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
echo $count;
if($count == 1){
 header("location:../ParentMenu/ParentMenu.php");//username and password is valid
}
else
	{
 header("location:loginfail/loginfail.html");
   //invalid password
	}


 ?>
