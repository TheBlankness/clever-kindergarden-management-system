<?php
$email = $_POST['email'];

$con=mysqli_connect("localhost","web2","web2","clever");
$sql= "SELECT * FROM `parents` WHERE Email = '$email'";
$qry=mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($qry);
$fullname=$row['fullname'];
$username=$row['username'];
$password=$row['password'];

$headers = "Content-Type: text/html; charset=UTF-8\r\n";
$subject = "Reset Password";
$message = "Dear Mr/Mrs ".$fullname."<br>Here is your Username: $username <br> Password: $password " ;
mail($email,$subject,$message,$headers);
header("location:loginpage.html");
 ?>
