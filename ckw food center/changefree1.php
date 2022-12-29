<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include("connection.php");
session_start();
$sql1 = "SELECT * FROM `checkuserstudent` WHERE `Number` = '".$_SESSION['user']."' AND `Password` = '".$_SESSION['password']."' ";
		$result = $conn->query($sql1);
		$data = mysqli_fetch_array($result);
		if ($result->num_rows == 1)
		{
			$sentdata = "UPDATE `student` SET `Status free` = 'เปิด' WHERE `student`.`Number` = '".$_SESSION['user']."' ";
			$sending = $conn->query($sentdata);	
$sql1 = "SELECT * FROM `checkuserstudent` WHERE `Number` = '".$_SESSION['user']."' AND `Password` = '".$_SESSION['password']."' ";
		$result1 = $conn->query($sql1);
		$data = mysqli_fetch_array($result1);
if ($result1->num_rows == 1) {
			$sql = "SELECT * FROM `student` WHERE `Number` = '".$_SESSION['user']."' ";
			$result2 = $conn->query($sql);
			$data1 = mysqli_fetch_array($result2);
		ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set("Asia/Bangkok");
$sToken =$data1['line token'];
$sMessage = "คุณได้ทำการเปิดการใช้งานอิสระ...";
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
header("location:changefree.php");
		}
	}
?>
</body>
</html>