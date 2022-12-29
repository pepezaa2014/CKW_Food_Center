<!DOCTYPE html>
<html>
<head>
	<title></title>
		<script>
window.setTimeout(function() {
window.location = 'changecard.php';
}, 1700);
</script>
	<link rel="stylesheet" type="text/css" href="box.css">
	<style>
	.btn-group .button {
  background-color: #00CD00; /* Green */
  border: #33CC99;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: center;
  font-family: Blern Regular;
}

.btn-group .button:hover {
  background-color: #00FF00;
}
html {
  background: url(https://images.unsplash.com/photo-1556742393-d75f468bfcb0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80) no-repeat center fixed;
  background-size: cover;
		
	</style>
</head>
<body>
	<div class="box2">
		<center><font size="5" color="red">
<?php 
include("connection.php");
session_start();
		$numstudent = $_POST['numstudent'];
		$password = $_POST['password'];
		$newidcard = $_POST['newidcard'];
		$secure= $_POST['secure'];
		$sql1 = "SELECT * FROM `checkuserstudent` WHERE `Number` = '".$numstudent."' AND `Password` = '".$password."' ";
		$result = $conn->query($sql1);
		$data = mysqli_fetch_array($result);
		if ($result->num_rows == 1) {
			if ($data['Secure code']!=$secure) {
				echo "รหัสยืนยันตัวตนของคุณไม่ถูกต้อง";
			}
			else{
$sql2 = "SELECT * FROM `student` WHERE `Number` = '".$numstudent."'";
$sentdata = "UPDATE `student` SET `CardId` = '$newidcard', `Statuscard` = 'สามารถใช้งานได้' WHERE `student`.`Number` = '$numstudent'";
$sending = $conn->query($sentdata);	
$result1 = $conn->query($sql2);
$data1 = mysqli_fetch_array($result1);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set("Asia/Bangkok");
$sToken =$data1['line token'];
$sMessage = "คุณได้ทำการเปลี่ยนบัตรเรียบร้อยแล้ว";
$chOne = curl_init();
curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt( $chOne, CURLOPT_POST, 1);
curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage);
$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec( $chOne ); //Result error
if(curl_error($chOne))
{
echo 'error:' . curl_error($chOne);
}
else {
$result_ = json_decode($result, true);
echo "status : ".$result_['status']; echo "message : ". $result_['message'];
}
curl_close( $chOne );  
$_SESSION['show5']="เปลี่ยนบัตรเรียบร้อยแล้ว";
header("location:changecard.php");
}
		}
else {
	echo "หมายเลขนักเรียนหรือรหัสผ่านผิด";
}
 ?></font></center>/</div>
</body>
</html>