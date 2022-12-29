<?php
include("connection.php");
session_start();
		$sql1 = "SELECT * FROM `vendor` WHERE `Id` = '".$_SESSION['id']."' ";
		$result = $conn->query($sql1);
		$data = mysqli_fetch_array($result);
		if ($result->num_rows == 1) {
		// $data['Sale25']++;
		// $updatedata="UPDATE `vendor` SET `Sale25`='".$data['Sale25']."' WHERE `vendor`.`Id` = '".$_SESSION['id']."' ";
		// $sending = $conn->query($updatedata);
		$_SESSION['numsale']=2;
		header("location:scancard.php");
}
?>