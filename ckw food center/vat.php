<?php
include("connection.php");
session_start();
		$sql1 = "SELECT * FROM `vendor` WHERE `Id` = '".$_SESSION['id']."' ";
		$result = $conn->query($sql1);
		$data = mysqli_fetch_array($result);
		if ($result->num_rows == 1) {
			$vat=($data['Income']*10)/100;
		$updatedata="UPDATE `vendor` SET  `Vat food center`='".$vat."' WHERE `vendor`.`Id` = '".$_SESSION['id']."' ";
		$sending = $conn->query($updatedata);
		header("location:interfacevendor.php");
	}