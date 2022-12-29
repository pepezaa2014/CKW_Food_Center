<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include("connection.php");
session_start();
$sql1 = "SELECT * FROM `student` WHERE `CardId` = '".$_SESSION['card']."' ";
		$result = $conn->query($sql1);
		$data = mysqli_fetch_array($result);
		if ($result->num_rows == 1) {
			if ($data['Status free']=="เปิด") {
			$data['Balance']-=$_SESSION['pay'];
			$updatedata="UPDATE `student` SET `Balance`='".$data['Balance']."' WHERE `student`.`CardId` = '".$_SESSION['card']."' ";
			$sending = $conn->query($updatedata);

			$sql = "SELECT * FROM `checkuseradmin` WHERE `ID` = '".$_SESSION['ID']."' ";
			$result1 = $conn->query($sql);
			$data1 = mysqli_fetch_array($result1);
			$data1['Total']+=$_SESSION['pay'];
			$data1['Vat']=($data1['Total']/100)*10;
			$updatedata1="UPDATE `checkuseradmin` SET `Total`='".$data1['Total']."' , `Vat`='".$data1['Vat']."' WHERE `checkuseradmin`.`ID` = '".$_SESSION['ID']."' ";
			$sending1 = $conn->query($updatedata1);
			header("location:sentlinepay.php");
			}
			else
				header("location:pay3.php");

		}
?>
</body>
</html>