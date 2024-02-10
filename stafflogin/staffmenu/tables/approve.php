<?php
$approve=$_GET['approve'];
$parentID=$_GET['parentID'];
$email=$_GET['email'];
$fullname1=$_GET['fullname'];

if($approve=="yes"){
  $con=mysqli_connect("localhost","web2","web2","clever");
  $sql = "UPDATE `parents` SET `registered` = 'Approved' WHERE `parents`.`parentID` = $parentID";
  $qry = mysqli_query($con,$sql);//run query

  $headers = "Content-Type: text/html; charset=UTF-8\r\n";
  $subject = "Your Registration has been Approved";
  $message = "Dear Mr/Mrs ".$fullname1."<br>Your child Registration has been succesfully approved by our staff" ;
  mail($email,$subject,$message,$headers);

}else {
  $con=mysqli_connect("localhost","web2","web2","clever");
  $sql = "UPDATE `parents` SET `registered` = 'Declined' WHERE `parents`.`parentID` = $parentID";
  $qry = mysqli_query($con,$sql);//run query
}



header('Location:pending.php');
 ?>
