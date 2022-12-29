<link rel="stylesheet" type="text/css" href="box.css">
<script>
window.setTimeout(function() {
window.location = 'forgot.php';
}, 1700);
</script>
	<style >
		html {
  background: url(https://images.unsplash.com/photo-1457131760772-7017c6180f05?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1036&q=80) no-repeat center fixed;
  background-size: cover;
	</style>
	<center><div class="box2"> <font size="5" color="red" face="Blern Regular">
<?php
include("connection.php");
session_start();
if (isset($_POST['user'])) {
	$sql1 = "SELECT * FROM `checkuserstudent` WHERE `Number` = '".$_POST['user']."' AND `Secure code` = '".$_POST['secure']."' ";
		$result = $conn->query($sql1);
		$data = mysqli_fetch_array($result);
		$sql = "SELECT * FROM `student` WHERE `Number` = '".$_POST['user']."' AND `Secure code` = '".$_POST['secure']."' ";
		$result1 = $conn->query($sql);
		$data1 = mysqli_fetch_array($result1);
		if ($result->num_rows == 1){
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set("Asia/Bangkok");
$sToken =$data1['line token'];
$sMessage = "รหัสผ่านของคุณคือ ".$data['Password'];;
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
$_SESSION['show']="*** ส่งข้อมูลไปยังไลน์เรียบร้อยแล้ว ***";
header("location:forgot.php");
		}
		else{
			echo "ไม่พบหมายเลขของคุณในระบบ";
		}
	}

?></font></div></center>