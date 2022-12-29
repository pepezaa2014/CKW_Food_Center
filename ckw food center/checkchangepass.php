<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="box.css">
	<script>
window.setTimeout(function() {
window.location = 'changepass.php';
}, 1700);
</script>
</head>
<style >.btn-group .button {
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
  background: url(https://images.unsplash.com/photo-1499244571948-7ccddb3583f1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1489&q=80) no-repeat center fixed;
  background-size: cover;</style>

<body>
	<center><div class="box2"><font size="5" color="red">
<?php
include("connection.php");
session_start();
		$sql1 = "SELECT * FROM `checkuserstudent` WHERE `Number` = '".$_POST['user']."' AND `Password` = '".$_POST['oldpass']."' ";
		$result = $conn->query($sql1);
		$data = mysqli_fetch_array($result);
		if ($result->num_rows == 1)
		{
			$sql2 = "SELECT * FROM `checkuserstudent` WHERE `Number` = '".$_POST['user']."'";
			$sentdata = "UPDATE `checkuserstudent` SET `Password` = '".$_POST['newpass']."' WHERE `checkuserstudent`.`Number` = '".$_POST['user']."' AND `Password` = '".$_POST['oldpass']."'";
			$sending = $conn->query($sentdata);	


$sql10 = "SELECT * FROM `student` WHERE `Number` = '".$_POST['user']."'";
$result10 = $conn->query($sql10);
$data10 = mysqli_fetch_array($result10);

			ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set("Asia/Bangkok");
$sToken =$data10['line token'];
$sMessage = "รหัสผ่านใหม่ของคุณคือ ".$_POST['newpass'];
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
header("location:changepass.php");
		}
		elseif (($data['Number']!=$_POST['user'])||($data['Password']!=$_POST['oldpass'])) {
			echo "ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง";
		}
				elseif ($data['Number']!=$_POST['user']) {
		 	echo "ไม่พบหมายเลขของคุณในระบบ";
		 } 
		 		elseif ($_POST['newpass']=="") {
			echo "กรุณากรอกรหัสผ่านใหม่";
		}


			
		

			
?></font>
</div></center>
</body>
</html>