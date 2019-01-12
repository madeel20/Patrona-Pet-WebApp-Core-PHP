<?php 
session_start();
if(isset($_SESSION['name'])){
	if($_SESSION['name'] != 'admin') {
		header("Location: web/index.php");
	}
	 /* Redirect browser */
}
$error = "";
if(isset($_POST['oldpwd'])){
$oldpassword = $_POST['oldpwd'];
$newpassword = $_POST['newpwd'];
$rnewpassword = $_POST['rnewpwd'];
include 'connection.php';
$conn = new MySQLi($server,$username,$password ,$dbname);
$sql = "select * from admin";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
$pwd = $row['password'];
if($pwd == $oldpassword){
	if($newpassword == $rnewpassword){
		$sql = "UPDATE `admin` SET `password`= '".$newpassword."' WHERE username='admin'";
		$conn->query($sql);
		$error = "Password Changed!";	
		
		
	}
	else {
		$error = "New passwords does not matched!";
	}
	
}
else {
	$error = "Old Password is incorrect!";
	
}
	
}
}

	

?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Change Password - Admin</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
 </head>

<body>
<div class="pull-left text-center" ><form method="post" action="admin.php"> <input style="margin-top:10px; margin-left:5px;" type="submit" class="btn btn-default" value="<- Back"> </form>
      </div>
  <div class="pull-right text-center" ><form method="post" action="logout.php"> <input style="margin-top:10px;" type="submit" class="btn btn-default" value="Log Out"> </form>
      </div>
<center><h1> Change Password: </h1></center>
<div class="container" style="font-size:25px;">
<form action="#" method="post">
Username: <input class="form-control" type="text" value="admin" disabled readonly>
Old Password: <input class="form-control" type="password"  placeholder="Enter your old password..." name="oldpwd" autofocus required>
New Password: <input class="form-control" type="password" placeholder="Enter your new password..." name="newpwd" required>
Retype Password: <input class="form-control" type="password" name="rnewpwd" placeholder="Re-Enter your new password" required> 
<input type="submit">
</form>
<p style="color:red;" > <?php echo $error; ?></p>



</div>






<br>
<footer class="modal-footer"> <b>&copy; M.Adeel</b> </footer>
</body>
</html>