<?php
include("connection.php");
session_start();
date_default_timezone_set("Asia/Bangkok");
$date = date("Y-m-d");

$sql5 = "SELECT * FROM `totalperday` WHERE `Day` = '$date' ";
$result5 = $conn->query($sql5);
$data = mysqli_fetch_array($result5);
if ($result5->num_rows == 1){
	$total=$data['Total'];
	$vat=$data['Vat'];
}
else{
	$total=0;
	$vat=0;
}

$sql = "SELECT * FROM `vendor` ORDER BY Id asc ";
$result = $conn->query($sql);

while ($row = mysqli_fetch_array($result)) {
	$total+=$row['Income'];
	$vat+=$row['Vat food center'];
}

$sql1 = "SELECT * FROM `checkuseradmin` ORDER BY Id asc ";
$result1 = $conn->query($sql1);
while ($row = mysqli_fetch_array($result1)) {
	$total+=$row['Total'];
	$vat+=$row['Vat'];
}


$sql2 = "SELECT * FROM `totalperday` ";
$result2 = $conn->query($sql2);

$sql5 = "SELECT * FROM `totalperday` WHERE `Day` = '$date' ";
$result5 = $conn->query($sql5);
$data = mysqli_fetch_array($result5);
if ($result5->num_rows == 1){
$updatedata3= "UPDATE `totalperday` SET `Total`= '$total' , `Vat`='$vat' WHERE `Day` = '$date' ";
$sending = $conn->query($updatedata3);

}

else{
$insertdata="INSERT INTO `totalperday` (`Day`, `Total`, `Vat`) VALUES ('$date', '$total', '$vat')";
$sending = $conn->query($insertdata);

}

$updatedata1="UPDATE `vendor` SET `Income`='0' , `Sale10`='0' , `Sale20`='0' , `Sale25`='0' , `Vat food center`='0'";
$updatedata2="UPDATE `checkuseradmin` SET `Total`='0' , `Vat`='0' ";


$sending = $conn->query($updatedata1);
$sending = $conn->query($updatedata2);

$_SESSION['show']="ทำการรีเซ็ตเรียบร้อยแล้ว";
header("location:interfaceadmin.php");


?>