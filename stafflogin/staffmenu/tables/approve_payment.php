<?php
$approve=$_GET['approve'];
$parentID=$_GET['parentID'];
$email=$_GET['email'];
$fullname1=$_GET['fullname'];

if($approve=="yes"){
  $con=mysqli_connect("localhost","web2","web2","clever");
  $sql = "UPDATE `parents` SET `payment` = 'Approved' WHERE `parents`.`parentID` = $parentID";
  $qry = mysqli_query($con,$sql);//run query

    $headers = "Content-Type: text/html; charset=UTF-8\r\n";
    $subject = "Your Payment has been Approved";
    $message = "Dear Mr/Mrs ".$fullname1."<br>Your child's Payment for C.L.E.V.E.R kindergarten has been succesfully approved by our staff" ;
    mail($email,$subject,$message,$headers);
}else {
  $con=mysqli_connect("localhost","web2","web2","clever");
  $sql = "UPDATE `parents` SET `payment` = 'Declined' WHERE `parents`.`parentID` = $parentID";
  $qry = mysqli_query($con,$sql);//run query
}
header('Location:payments.php');
 ?>
