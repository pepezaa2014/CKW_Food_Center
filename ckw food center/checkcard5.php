<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
window.setTimeout(function() {
window.location = 'scancard.php';
}, 1700);
</script>
	<link rel="stylesheet" type="text/css" href="box.css">
	<style>
		html {
  background: url(https://images.unsplash.com/photo-1556742205-e10c9486e506?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80) no-repeat center fixed;
  background-size: cover;
}
	</style>
</head>
<body>
	<div class="box2"><font size="4" color="red"><center>
<?php
include("connection.php");
session_start();
$sql1 = "SELECT * FROM `student` WHERE `CardId` = '".$_SESSION['card']."' ";
$result = $conn->query($sql1);
$data = mysqli_fetch_array($result);
		if ($result->num_rows == 1) {
			if ($_SESSION['numsale']==1) {
				if ($data['Balance']<"20") {
					echo "จำนวนเงินของคุณไม่เพียงพอ กรุณาเติมเงิน";
				}
				else {
					header("location:checkcard1.php");
				}
			}
			else if ($_SESSION['numsale']==2) {
				if ($data['Balance']<"25") {
					echo "จำนวนเงินของคุณไม่เพียงพอ กรุณาเติมเงิน";
				}
				else {
					header("location:checkcard1.php");
				}
			}
			else if ($_SESSION['numsale']==3) {
				if ($data['Balance']<"10") {
					echo "จำนวนเงินของคุณไม่เพียงพอ กรุณาเติมเงิน";
				}
				else {
					header("location:checkcard1.php");
				}
			}
		}
?></center></font></div>
</body>
</html>