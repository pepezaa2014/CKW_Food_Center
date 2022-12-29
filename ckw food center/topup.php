<!DOCTYPE html>
<html>
<head>
  <title></title>
          <script>
window.setTimeout(function() {
    window.location = 'topupmoney.php';
  }, 1700);
</script>
<link rel="stylesheet" type="text/css" href="box.css">
<style >
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
<center><div class="box2"><font size="5" color="red">
<?php
include("connection.php");
session_start();
$sql = "SELECT * FROM `student` WHERE `Number` = '".$_POST['user']."' ";
    $result1 = $conn->query($sql);
    $data1 = mysqli_fetch_array($result1);
    if ($result1->num_rows == 1)
    {
      if ($_POST['money']=="") {
        echo "กรุณากรอกจำนวนเงิน";
      }
      else {
$newbalance=$data1['Balance']+$_POST['money'];
$sentdata = "UPDATE `student` SET `Balance` = '".$newbalance."' WHERE `student`.`Number` = '".$_POST['user']."'";
$sending = $conn->query($sentdata);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set("Asia/Bangkok");
$sToken =$data1['line token'];
$sMessage = "คุณได้เติมเงินเป็นจำนวน ".$_POST['money']." บาท";
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
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set("Asia/Bangkok");
$sToken =$data1['line token'];
$sMessage = "ตอนนี้คุณมียอดเงินคงเหลือ ".$newbalance." บาท";
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
$_SESSION['show6']="เติมเงินเรียบร้อยแล้ว";
header("location:topupmoney.php");
      }
    }
    else
      echo "ไม่พบหมายเลขสมาชิกอยู่ในระบบ";
?></font></div></center>
</body>
</html>



