<?php

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$adminemail = "ainnuraqeela@gmail.com";
$headers = "Content-Type: text/html; charset=UTF-8\r\n";
$subject = "Dear admin";
$message = "I am".$name."<br> $message <br> -regards $email " ;
mail($adminemail,$subject,$message,$headers);

header('Location:MainMenu.html');

 ?>
