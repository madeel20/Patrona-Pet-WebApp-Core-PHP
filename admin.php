<?php 
session_start();
if(isset($_SESSION['name'])){
	if($_SESSION['name'] != 'admin') {
		header("Location: web/index.php");
	}
	 /* Redirect browser */
}

/*if(isset($_POST['delete'])){
$devicesid = array();
$devicesid = $_POST['deviceid'];
include "connection.php";
$conn = new mysqli($server,$username,$password,$dbname);
foreach($devicesid as $id){
      $sql = "DELETE FROM `devices` WHERE deviceid=".$id;
	  $conn->query($sql);	
}	
}*/

	

?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

 </head>
<body>
<span class=" text-center col-lg-12" style="
width:100%; background-image:url(web/images/img01.jpg); padding:10px;">
<img src="web/images/logocomplete.png" width="180" style="margin:5px;"/>
<h1 style="color:white;">Admin Panel</h1>
</span>
<div class=" pull-left text-center" style="margin-left:10px;" ><form method="post" action="changepassword.php"> <input style="margin-top:10px;" type="submit" class="btn btn-default" value="Change Password"> </form></div>
<div class=" pull-right text-center"  style="margin-right:10px;">
<form method="post" action="logout.php"> <input style="margin-top:10px;" type="submit" class="btn btn-default" value="Log Out"> </form>
      </div>
<!-- header ends here -->
<div class="container" style="" >
<center> <h1> All Registered Users:</h1>
<table class="table-bordered table-hover table-responsive" style="font-size:17px; text-align:center; width:100%" id="alldevices">
<tr  style="background-color:#930; color:white;" > 
    <th style="text-align:center"> Username</th>
    <th style="text-align:center"> Password</th><th style="text-align:center">Date Created</th></tr><?php 
	include "connection.php";
// Create connection
$conn = new mysqli($server, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
	$error = die("Connection failed: " . $conn->connect_error);
	
	
    
} 
$sql = "SELECT  * FROM users";
$result = $conn->query($sql);
	if($result->num_rows>0){
	  while($row = $result->fetch_assoc()) {
		  
			echo "<tr style='font-size:15px;'><td>". $row['username'] . "</td><td>". $row['password'] . "</td><td>". $row['CDate'] . '</td><td><form action="delete.php" method="post"><input type="submit" style="padding:10px;" value="Delete" name="sdelete">
			<input type="hidden" name="WUsername" value="'.$row['username'].'"/><input type="hidden" name="AUId" value="'.$row['id'].'">'. '</form></td></tr>' ;
	
	  }}
?></table>
 </div>






<br>
<footer class="modal-footer"> </footer>

</body>
</html>
<?php 
	 