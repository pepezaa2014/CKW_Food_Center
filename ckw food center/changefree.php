<?php
include("connection.php");
session_start();
$sql1 = "SELECT * FROM `student` WHERE `Number` = '".$_SESSION['user']."' ";
$result = $conn->query($sql1);
$data = mysqli_fetch_array($result);
if ($result->num_rows == 1){
$_SESSION['free']=$data['Status free'];
echo $data['Status free'];
header("location:interfacestudent.php");
}
?>