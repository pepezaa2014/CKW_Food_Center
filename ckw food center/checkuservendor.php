<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="box.css">
	<script>
window.setTimeout(function() {
    window.location = 'loginvendor.php';
  }, 1700);
</script>
	<style>
		html {
  background: url(https://images.unsplash.com/photo-1556742205-e10c9486e506?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80) no-repeat center fixed;
  background-size: cover;
}
	</style>
	<center><div class="box2"><font size="5" color="red">
	<?php
include("connection.php");
	?>
</head>
<body>
	<?php
		session_start();
		$user = $_POST['user'];
		$password = $_POST['password'];
		$sql1 = "SELECT * FROM `checkvendor` WHERE `Username` = '".$user."' AND `Password` = '".$password."' ";
		$result = $conn->query($sql1);
		$data = mysqli_fetch_array($result);
		if ($result->num_rows == 1) {
			$_SESSION['id']=$data['ID'];
			$sql = "SELECT * FROM `vendor` WHERE `Id` = '".$_SESSION['id']."' ";
			$result1 = $conn->query($sql);
			$data1 = mysqli_fetch_array($result1);
			$_SESSION['name']=$data1['Name'];
			$_SESSION['income']=$data1['Income'];
			$_SESSION['sale10']=$data1['Sale10'];
			$_SESSION['sale20']=$data1['Sale20'];
			$_SESSION['sale25']=$data1['Sale25'];

			header('location:interfacevendor.php');
		}
		else{
			echo "Your Username or Password is wrong.";

		}
		?></div></font></center>

</body>
</html>