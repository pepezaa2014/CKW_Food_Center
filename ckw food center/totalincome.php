<?php
include("connection.php");
session_start();
$sql1 = "SELECT * FROM `vendor` WHERE `Id` = '".$_SESSION['id']."' ";
		$result = $conn->query($sql1);
		$data = mysqli_fetch_array($result);
		if ($result->num_rows == 1) {
		$totalincome=($data['Sale20']*20)+($data['Sale25']*25)+($data['Sale10']*10);
		$updatedata="UPDATE `vendor` SET `income`='".$totalincome."' WHERE `vendor`.`Id` = '".$_SESSION['id']."' ";
		$sending = $conn->query($updatedata);
		header("location:vat.php");
		}
?>