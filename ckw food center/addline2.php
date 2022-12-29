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
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set("Asia/Bangkok");
$sToken =$data['line token'];
$sMessage = "สวัสดีคุณ ".$data['Name']." ยินดีต้อนรับเข้าสู่ระบบจัดการศูนย์อาหารโรงเรียนเชียงคำวิทยาคม";
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
$_SESSION['showline']="เพิ่ม Line Token เรียบร้อยแล้ว";  	
header("location:addlinetoken.php");
?>
</body>
</html>