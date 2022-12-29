<?php
include("connection.php");
session_start();
$sql1 = "SELECT * FROM `student` WHERE `CardId` = '".$_SESSION['card']."' ";
		$result = $conn->query($sql1);
		$data = mysqli_fetch_array($result);
if ($result->num_rows == 1) {
		ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set("Asia/Bangkok");
$sToken =$data['line token'];
$sMessage = "คุณมียอดเงินคงเหลือ ".$data['Balance'];
$chOne = curl_init();
curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt( $chOne, CURLOPT_POST, 1);
curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage." บาท");
$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1);



if ($data['Balance']<=50) {
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt( $chOne, CURLOPT_POST, 1);
curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message="."คุณมียอดเงินคงเหลือ ".$data['Balance']." บาท ตอนนี้ยอดเงินของคุณเหลือน้อย กรุณาเติมเงิน");
$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1);
header("location:pay.php");

}

$_SESSION['show2']="ชำระเงินเรียบร้อยแล้ว";
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
header("location:totalincome.php");
		}