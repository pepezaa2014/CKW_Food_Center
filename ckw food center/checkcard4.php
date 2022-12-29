<?php
include("connection.php");
session_start();
$sql1 = "SELECT * FROM `vendor` WHERE `Id` = '".$_SESSION['id']."' ";
		$result = $conn->query($sql1);
		$data = mysqli_fetch_array($result);
		if ($result->num_rows == 1) {
			if ($_SESSION['numsale']==1) {
					$data['Sale20']++;
					$updatedata="UPDATE `vendor` SET `Sale20`='".$data['Sale20']."' WHERE `vendor`.`Id` = '".$_SESSION['id']."' ";
					$sending = $conn->query($updatedata);
					header("location:checkcard2.php");
			}
			else if ($_SESSION['numsale']==2) {
					$data['Sale25']++;
					$updatedata="UPDATE `vendor` SET `Sale25`='".$data['Sale25']."' WHERE `vendor`.`Id` = '".$_SESSION['id']."' ";
					$sending = $conn->query($updatedata);
					header("location:checkcard2.php");
			}
			else if ($_SESSION['numsale']==3) {
					$data['Sale10']++;
					$updatedata="UPDATE `vendor` SET `Sale10`='".$data['Sale10']."' WHERE `vendor`.`Id` = '".$_SESSION['id']."' ";
					$sending = $conn->query($updatedata);
					header("location:checkcard2.php");
			}
		}
?>