<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="box.css">
<script>
window.setTimeout(function() {
window.location = 'checkcard1.php';
}, 1700);
</script>
<style>
	html {
  background: url(https://images.unsplash.com/photo-1556742205-e10c9486e506?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80) no-repeat center fixed;
  background-size: cover;
}
</style>
</head>
<body>
<center><div class="box2"><font size="5" color="red">
<?php
include("connection.php");
session_start();
$sql = "SELECT * FROM `student` WHERE `CardId` = '".$_SESSION['card']."' ";
		$result1 = $conn->query($sql);
		$data1 = mysqli_fetch_array($result1);
		if ($result1->num_rows == 1){

			if ($data1['Secure code']==$_POST['securecode']) {
			header("location:checkcard4.php");
			}
			else
			echo "รหัสยืนยันตัวตนของคุณไม่ถูกต้อง";
		}
					?>
					</font></div></center><br><br>
			</body>
			</html>