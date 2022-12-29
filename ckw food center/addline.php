<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include("connection.php");
session_start();
$sql1 = "SELECT * FROM `student` WHERE `Number` = '".$_SESSION['user']."' ";
$result1 = $conn->query($sql1);
$data = mysqli_fetch_array($result1);
if ($result1->num_rows == 1) {
	$linetoken=$_POST['linetoken'];
	$sentdata = "UPDATE `student` SET `line token` = '".$linetoken."' WHERE `student`.`Number` = '".$_SESSION['user']."'";
	$sending = $conn->query($sentdata);

	header("location:addline2.php");
}
?>
</body>
</html>