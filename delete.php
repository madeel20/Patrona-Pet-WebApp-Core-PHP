<?php 
session_start();
if(isset($_SESSION['name'])){
	if($_SESSION['name'] != 'admin'){
		header("Location: Location.php");
	}
	 /* Redirect browser */
}
if(isset($_POST['AUId']) == false){
	header("Location: admin.php");
}

if(isset($_POST['confirmdelete'])){
$devicesid = $_POST['AUId'];
include "connection.php";
$conn = new mysqli($server,$username,$password,$dbname);
$sql = "delete from users where id=".$devicesid;
if($conn->query($sql)){
		header("Location: admin.php");
		  }
		  else {
			  echo $conn->error;
		  }
	 

}

?><!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log In  </title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
 
</head>

<body>
<div class="row">
<div class="col-lg-3"></div>
<div class="text-center center-block col-lg-6 col-sm-12"> 
<h1>  Do you want to delete :  <?php echo $_POST['WUsername'];?> </h1>
<p style="color:red; font-size:17px;">Note: User info will be deleted permanently!</p><form  style="font-size:20px;"action="#" method="post">
<input type="hidden" name="AUId" value="<?php echo $_POST['AUId'];?>"/>  
<input type="hidden" name="confirmdelete"/ value="1"><input type="submit" value="Confirm"><span><a href="admin.php">Cancel</a></span></form></div>
<span style="font-size:20px;">

</span>
</body>
</html>