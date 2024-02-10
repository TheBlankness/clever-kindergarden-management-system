<?php
session_start();
if (!(isset($_SESSION['username']) && $_SESSION['username'] != ''))
	header ("Location: ../MainMenu.html");

$username = $_SESSION['username'];

$con=mysqli_connect("localhost","web2","web2","clever");
$sql = 'SELECT * FROM `parents` WHERE username = "'.$username.'"';
$qry = mysqli_query($con,$sql);//run query
$row = mysqli_fetch_assoc($qry);

$parentID = $row['parentID'];

$sql = "select * from childinfo where parentID = '".$parentID."'";
$qry = mysqli_query($con,$sql);//run query
$row = mysqli_fetch_assoc($qry);

$Name = $row['fullname'];
$ChildID = $row['ChildID'];
$age = $row['age'];
$address = $row['address'];
$zip = $row['zip'];
$city = $row['city'];
$plans = $row['plans'];

//view file
$fileName= $ChildID;
//echo '<img src="uploads/'.$fileName.'.png"'.' alt="Child Image" height="200" width="150">';




 ?>

 <!DOCTYPE html>
<html>
<title>Child Potrait</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php

echo "<style>";
echo "body, h1,h2,h3,h4,h5,h6 {font-family: 'Montserrat', sans-serif}";
echo ".w3-row-padding img {margin-bottom: 12px}";
echo ".bgimg {";
echo "background-position: center;";
echo " background-repeat: no-repeat;";
echo "background-size: cover;";
echo 'background-image: url("uploads/'.$fileName.'.jpg");';
echo "min-height: 100%;";
echo "}";
echo "</style>";

 ?>
<body>

<!-- Sidebar with image -->
<nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
  <div class="bgimg"></div>
</nav>

<!-- Page Content -->
<div class="w3-main w3-padding-large" style="margin-left:40%">

  <!-- Header -->
  <header class="w3-container w3-center" style="padding:128px 16px" id="home">


		<?php
echo "<h1 class='w3-jumbo'><b>".$Name."</b></h1>";
 ?>

 <div class="w3-content w3-justify w3-text-grey w3-padding-32" id="about">
	 <h2>About</h2>
	 <hr class="w3-opacity">
	 <?php
 echo "<p class='w3-wide'><b>Age : </b>$age</p>";
 echo "<p class='w3-wide'><b>Address : </b>$address</p>";
echo "<p class='w3-wide'><b>Zip : </b>$zip</p>";
echo "<p class='w3-wide'><b>City : </b>$city</p>";
 echo "<p class='w3-wide'><b>Plan : </b>$plans plan</p>";
		?>
<hr class="w3-opacity">

	 <h3 class="w3-padding-16">Teacher's Comment</h3>

	 <?php
	echo " <p>$Name is confident, positive and a great role model for his/her classmates.</p>";
		 ?>
 <hr class="w3-opacity">

<a href="/WebProject/ParentMenu/ParentMenu.php" >Return to menu</a>

 </div>
 <div class="w3-content w3-justify w3-text-grey w3-padding-32" id="about">
 <h3 class="w3-padding-16">Grades</h3>
     <p class="w3-wide">English</p>
     <div class="w3-light-grey">
       <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:65%">65%</div>
     </div>
     <p class="w3-wide">Social</p>
     <div class="w3-light-grey">
       <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:85%">85%</div>
     </div>
     <p class="w3-wide">Math</p>
     <div class="w3-light-grey">
       <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:40%">40%</div>
     </div><br>
 </div>
 <div class="w3-content w3-justify w3-text-grey w3-padding-32" id="about">
 <h3 class="w3-padding-16">Upload Potrait</h3>
		<form action="upload.php" method="post" enctype="multipart/form-data">

		    <input type="file" name="fileToUpload" id="fileToUpload">
				<?php
echo "<input type='hidden' name='ChildID' value='$ChildID' >";
				 ?>
		<br><input type="submit" value="Upload Image" name="submit">
		</form>
		</div>

  </header>
  </div>
  </div>
  </div>
<!-- END PAGE CONTENT -->
</div>

<script>
// Open and close sidebar
function openNav() {
  document.getElementById("mySidebar").style.width = "60%";
  document.getElementById("mySidebar").style.display = "block";
}

function closeNav() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
