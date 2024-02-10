<?php
//create an uploads folder in your in the same folder
//as this file (upload.php)
//to display the contents of FILES array
$target_dir = "receipts/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$uploadOk = 1;
if(isset($_POST["register"])) {
 if (file_exists($target_file)) // Check if file already exists
	{
	//echo "Sorry, file already exists.";
header('Location:../register/registerstatus/registerfail.html');
	$uploadOk = 0;
	}
 if ($_FILES["fileToUpload"]["size"] > 500000000) { //limit to 500kb size
   	// echo "Sorry, your file is too large.";
  header('Location:../register/registerstatus/registerfail.html');
    	$uploadOk = 0;
	}
  if($imageFileType != "jpg") {
    //  echo "Sorry, only JPG files are allowed.";
  //    $message1 = "file type not supported";
    //  echo "<script type='text/javascript'>alert('$message1');</script>";
header('Location:../register/registerstatus/registerfail.html');
      $uploadOk = 0;
  }


	// Check if $uploadOk is set to 0 by an error
 if ($uploadOk == 0) //error
	{
  header('Location:../register/registerstatus/registerfail.html');
	}
else  	// if everything is ok, try to upload file
	{
	// echo "<br>Check:- ".$target_file;

	$sourceFile = $_FILES['fileToUpload']['tmp_name'];
	$ext = pathinfo($_FILES['fileToUpload']['name'], PATHINFO_EXTENSION);



    //coding
    $full_name=$_POST['full_name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $child_full_name=$_POST['child_full_name'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $zip=$_POST['zip'];
    $City=$_POST['City'];
    $state=$_POST['state'];
    $option=$_POST['option'];

    //check if user exists
    $con=mysqli_connect("localhost","web2","web2","clever");
    $sql= 'SELECT * FROM `parents` WHERE username = "'.$username.'" and password = "'.$password.'"';
    $result=mysqli_query($con,$sql);
    $count=mysqli_num_rows($result);
    echo $count;
    if($count == 1){
    //  $message = "you already registered";
    //  echo "<script type='text/javascript'>alert('$message');</script>";
    header('Location:../register/registerstatus/registerfail.html');
     //header("location:../login/loginpage.html");//username and password is valid
    }
    else
    	{
        $con=mysqli_connect("localhost","web2","web2","clever");
        $sql= "INSERT INTO `parents` (`parentID`, `fullname`, `username`, `password`, `Email`, `phone`)
         VALUES (NULL, '$full_name', '$username', '$password', '$email', '$phone')";
        $qry=mysqli_query($con,$sql);

        $con=mysqli_connect("localhost","web2","web2","clever");
        $sql= 'SELECT * FROM `parents` WHERE username = "'.$username.'" and password = "'.$password.'"';
        $qry=mysqli_query($con,$sql);

        $row = mysqli_fetch_assoc($qry);
        $parentID = $row['parentID'];
        $newfile=$parentID; //any name sample.jpg
        $targetFile = 'receipts/'.$newfile.'.'.$ext;

        $con=mysqli_connect("localhost","web2","web2","clever");
        $sql= "INSERT INTO `childinfo` (`ChildID`, `parentID`, `fullname`, `age`, `address`, `zip`, `city`, `state`, `plans`)
        VALUES (NULL, '$parentID', '$child_full_name', '$age', '$address', '$zip', '$City', '$state', '$option')";
        $qry=mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($qry);

//sucess

if(move_uploaded_file($sourceFile,$targetFile))
  {
header('Location:../register/registerstatus/registersuccess.html');
  }
else
{
header('Location:../register/registerstatus/registerfail.html');
      //echo "Sorry, there was an error uploading your file.";
  }

        //end success

    	}

      //end code

	}
}
 ?>
<!--
<!DOCTYPE html>
<html>
<body>
<button onclick="goBack()">Go Back</button>
<script>
function goBack(){
//window.alert("Back");
window.history.back();
}
</script>
</body>
</html>
-->
