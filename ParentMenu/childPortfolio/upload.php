<?php

//create an uploads folder in your in the same folder
//as this file (upload.php)
print_r($_POST);
print_r($_FILES);//to display the contents of FILES array
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
if(isset($_POST["submit"])) {
 if (file_exists($target_file)) // Check if file already exists
	{
	echo "Sorry, file already exists.";
	$uploadOk = 0;
	}
 if ($_FILES["fileToUpload"]["size"] > 500000000) { //limit to 500kb size
   	 echo "Sorry, your file is too large.";
    	$uploadOk = 0;
	}


  if($imageFileType = "jpg") {
    $filetype = "jpg";

}

if($imageFileType = "png") {
  $filetype = "png";

}

if($imageFileType = "jpeg") {
  $filetype = "jpeg";

}


	// Check if $uploadOk is set to 0 by an error
 if ($uploadOk == 0) //error
	{
	echo "Sorry, your file was not uploaded.";
	}
else  	// if everything is ok, try to upload file
	{
	echo "<br>Check:- ".$target_file;

	$sourceFile = $_FILES['fileToUpload']['tmp_name'];
	$ext = pathinfo($_FILES['fileToUpload']['name'], PATHINFO_EXTENSION);

	$newfile=$_POST["ChildID"]; //any name sample.jpg
	$targetFile = 'uploads/'.$newfile.'.'.$ext;
	if(move_uploaded_file($sourceFile,$targetFile))
		{
  		 echo "<br>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		echo "<br>Check:- ".$target_file;
    header('Location:../childPortfolio/childport.php');
    		}
	else
		{
        		echo "Sorry, there was an error uploading your file.";
    		}
	}
}
 ?>
