<?php
//create an uploads folder in your in the same folder
//as this file (upload.php)
//to display the contents of FILES array
$target_dir = "../../register/receipts/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$uploadOk = 1;


 if ($_FILES["fileToUpload"]["size"] > 500000000) { //limit to 500kb size
   	echo "Sorry, your file is too large.";
  //header('Location:../register/registerstatus/registerfail.html');
    	$uploadOk = 0;
	}



	// Check if $uploadOk is set to 0 by an error
 if ($uploadOk == 0) //error
	{

//  header('Location:../register/registerstatus/registerfail.html');
	}
else  	// if everything is ok, try to upload file
	{
	// echo "<br>Check:- ".$target_file;

	$sourceFile = $_FILES['fileToUpload']['tmp_name'];
	$ext = pathinfo($_FILES['fileToUpload']['name'], PATHINFO_EXTENSION);

	$newfile=$_POST["parentID"]; //any name sample.jpg
	$targetFile = '../../register/receipts/'.$newfile.'.'.$ext;
	if(move_uploaded_file($sourceFile,$targetFile))
		{
    //coding
  header('Location:../ParentMenu.php');

      //end code
    		}
	else
		{
  //  header('Location:../register/registerstatus/registerfail.html');
            echo "Sorry, there was an error uploading your file.";
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
