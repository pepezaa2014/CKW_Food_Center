<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="box.css">
			<script>
window.setTimeout(function() {
    window.location = 'pay3.php';
  }, 1700);
</script>
<style>
	html {
  background: url(https://images.unsplash.com/photo-1556742393-d75f468bfcb0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80) no-repeat center fixed;
  background-size: cover;
}
</style>
</head>
<body>
	<div class="box2"><center><font face="Blern Regular" size="5" color="red">
<?php
include("connection.php");
session_start();
$sql = "SELECT * FROM `student` WHERE `CardId` = '".$_SESSION['card']."' ";
		$result1 = $conn->query($sql);
		$data1 = mysqli_fetch_array($result1);
		if ($result1->num_rows == 1){

			if ($data1['Secure code']==$_POST['securecode']) {
				if ($_SESSION['pay']>$data1['Balance']) {
					echo "ยอดเงินของคุณไม่เพียงพอ กรุณาเติมเงิน";
				}
				else
				{
				$data1['Balance']-=$_SESSION['pay'];
				$updatedata="UPDATE `student` SET `Balance`='".$data1['Balance']."' WHERE `student`.`CardId` = '".$_SESSION['card']."' ";
				$sending = $conn->query($updatedata);

				$sql1 = "SELECT * FROM `checkuseradmin` WHERE `ID` = '".$_SESSION['ID']."' ";
				$result = $conn->query($sql1);
				$data = mysqli_fetch_array($result);
				$data['Total']+=$_SESSION['pay'];
				$data['Vat']=($data['Total']/100)*10;
				$updatedata1="UPDATE `checkuseradmin` SET `Total`='".$data['Total']."' , `Vat`='".$data['Vat']."' WHERE `checkuseradmin`.`ID` = '".$_SESSION['ID']."' ";
				$sending1 = $conn->query($updatedata1);
				header("location:sentlinepay.php");
				}
			}
			else
			echo "รหัสยืนยันตัวตนของคุณไม่ถูกต้อง";

		}
			?>
			</font></center></div>
</body>
</html>

<!-- ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set("Asia/Bangkok");
$sToken =$data1['line token'];
$sMessage = "คุณมียอดเงินคงเหลือ ".$data1['Balance'];
$chOne = curl_init();
curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt( $chOne, CURLOPT_POST, 1);
curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage." บาท");
$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1);
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
curl_close( $chOne );   -->