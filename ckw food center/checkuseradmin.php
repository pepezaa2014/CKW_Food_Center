<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="box.css">
	<link rel="stylesheet" type="text/css" href="stylebuttext.css">
		<script>
window.setTimeout(function() {
    window.location = 'loginadmin.php';
  }, 1700);
</script>
	<style >
		html {
  background: url(https://images.unsplash.com/photo-1505826759037-406b40feb4cd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1052&q=80) no-repeat center fixed;
  background-size: cover;
	</style>

	<a href="loginadmin.php" class="text"><font size="+0" color="white">กลับ</font></a>
	<center><div class="box2"><font size="5" color="red">

	<?php
include("connection.php");
session_start();
	?>
</head>
<body>
	<?php
	$user = $_POST['user'];
		$password = $_POST['password'];
		$sql1 = "SELECT * FROM `checkuseradmin` WHERE `Username` = '".$user."' AND `Password` = '".$password."' ";
		$result = $conn->query($sql1);
		$data = mysqli_fetch_array($result);
		if ($result->num_rows == 1) {
			$_SESSION['ID']=$data['ID'];
			header('location:interfaceadmin.php');
		}
		else
			echo "Your Username or Password is wrong."."<br/>";
		?></div></font>
	</center>
		
</body>
</html>