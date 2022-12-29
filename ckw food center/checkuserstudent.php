<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="box.css">
		<script>
window.setTimeout(function() {
    window.location = 'index.php';
  }, 1700);
</script>
	<style >
		.btn-group .button {
  background-color: #33CC00; /* Green */
  border: #33CC99;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: center;
  font-family: Supermarket;
}

.btn-group .button:hover {
  background-color: #3e8e41;

}
html {
  background: url(https://images.pexels.com/photos/459469/pexels-photo-459469.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940) no-repeat center fixed;
  background-size: cover;
}
	</style>
</head>
<body>

<center><div class="box2"><font color="red" size="5">
<?php
include("connection.php");
session_start();
$_SESSION['user'] = $_POST['user'];
$_SESSION['password'] = $_POST['password'];
$sql1 = "SELECT * FROM `checkuserstudent` WHERE `Number` = '".$_SESSION['user']."' AND `Password` = '".$_SESSION['password']."' ";
$result1 = $conn->query($sql1);
$data = mysqli_fetch_array($result1);
if ($result1->num_rows == 1) {
			$sql = "SELECT * FROM `student` WHERE `Number` = '".$_SESSION['user']."' ";
			$result2 = $conn->query($sql);
			$data1 = mysqli_fetch_array($result2);
			$_SESSION['name']=$data1['Name'];
			$_SESSION['balance']=$data1['Balance'];
			$_SESSION['status']=$data1['Statuscard'];
			$_SESSION['free']=$data1['Status free'];
			$_SESSION['last_time'] = time();
		ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set("Asia/Bangkok");
$sToken =$data1['line token'];
$sMessage = "ตอนนี้คุณอยู่ในระบบ...";
$chOne = curl_init();
curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt( $chOne, CURLOPT_POST, 1);
curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage);
$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1);

if ($data1['Balance']<50) {
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt( $chOne, CURLOPT_POST, 1);
curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message="."ตอนนี้ยอดเงินของคุณเหลือน้อย กรุณาเติมเงิน");
$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1);
}


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
header("location:interfacestudent.php");
		}
else {
	echo "หมายเลขนักเรียนหรือรหัสผ่านผิด";
}

?>

</font>
</html>