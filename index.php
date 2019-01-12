<?php

session_start();
if(isset($_SESSION['name'])){
	if($_SESSION['name'] == 'admin'){
		header("Location: admin.php");
	}
	else {
		header("Location: web/index.php");
	}
	 /* Redirect browser */
exit();
}
$error = "";
if(isset($_POST['pwd'])){
	if($_POST['uname'] == 'admin'){
	 include 'connection.php'; /* this file contains variables used for connecting to database ($server,$username,$password,$dbname)*/

$conn = new mysqli($server, $username, $password);// this create connection

if ($conn->connect_error) { //  this checks if there error connecting to server
	$error = die("Connection failed: " . $conn->connect_error);} // saves error  in $error
	$sql = 'SELECT * FROM '.$dbname.'.admin '; //query for selecting data from studentlogin table
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$email = $_POST['uname'];
	$password = $_POST['pwd'];
		if($row['username'] == $email && $row['password'] == $password){
		    $_SESSION['name'] =  $row['username'];
			header("Location: admin.php"); /* Redirect browser */
exit();
		}
		else 
		{
			$reluser = $_POST['uname'];
			$error = "UserName or Password Is Incorrect!";
			
		}
	}}
	
}
else {
	
	include 'connection.php'; /* this file contains variables used for connecting to database ($server,$username,$password,$dbname)*/

$conn = new mysqli($server, $username, $password);// this create connection

if ($conn->connect_error) { //  this checks if there error connecting to server
	$error = die("Connection failed: " . $conn->connect_error);} // saves error  in $error
	$sql = 'SELECT * FROM '.$dbname.'.users '; //query for selecting data from studentlogin table
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$email = $_POST['uname'];
	$password = $_POST['pwd'];
		if($row['username'] == $email && $row['password'] == $password){
		    $_SESSION['name'] =  $row['username'];
			$_SESSION['AUId'] = $row['id'];
			header("Location: web/index.php"); /* Redirect browser */
exit();
		}
		else 
		{
			$reluser = $_POST['uname'];
			$error = "Username or Password Is Incorrect!";
			
		}
	}}
	
	
}
	
}
?><!DOCTYPE html >
<html >
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<style>
body{
	
    background:url(web/images/img07.png);
    background-repeat: no-repeat;
    background-size:cover;
}
#form1 {
    transition-timing-function:linear;
	transition-property:all;
	transition-duration:0.3s;
	background: rgb(255,255,255,0.5); 
	
	width:60%; 
	margin-left:20%;
border-radius:80px;
 padding-bottom:20px;
 height:550px;
 border:none;
	overflow:hidden;
}
#form1:hover {
	border-left:15px solid #900;
	border-right:15px solid #900;
	background: rgb(255,255,255,1);
height:560px;

}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log In  </title>

 <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
</head>

<body >
<div class="row" id="form1" style="
">

<span class=" text-center col-lg-12" style="
width:100%; background-image:url(web/images/img01.jpg); padding:10px;">
<a href="index.php">
<img src="web/images/logocomplete.png" width="180" style="margin:5px;"/></a>
</span>
<div class="col-lg-3"></div>
<div class="text-center center-block col-lg-6 col-sm-12"> 

<h2 style="font-family:'Comic Sans MS', cursive;">  Log In </h2>
<form action="#" method="post" > 
<div class="form-group text-center center-block">
 <label>Username:</label>  <input <?php 
  if(isset($reluser)){
	   echo 'value="'.$reluser.'"';
  }
  else echo 'autofocus'
 ?>  class="form-control" type="text" placeholder="Enter your username.." required  name="uname"
  ></div>
 <div class="form-group text-center center-block">
 <label>Password:</label>  <input 
 <?php 
  if(isset($reluser)){
	   echo 'autofocus';
  }
  ?> required  class="form-control" type="password" placeholder="Enter your password.." name="pwd"></div> 
 <input type="submit" style=" background-image:url(web/images/img01.jpg);" class="form-control btn-primary" >
 <a href="signup.php"  style="font-size:20px;"> Sign Up</a></form><span class="error"> <?php echo $error; ?> </span> </div>
 <div class="col-lg-3"></div>
</div></div>
</body>
</html>