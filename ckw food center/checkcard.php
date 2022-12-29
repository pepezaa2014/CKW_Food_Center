<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="box.css">
			<script>
window.setTimeout(function() {
    window.location = 'scancard.php';
  }, 1700);
</script>

<style>
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
  background: url(https://images.unsplash.com/photo-1556742205-e10c9486e506?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80) no-repeat center fixed;
  background-size: cover;
}
</style>
</head>
<body>
<center><div class="box2"><font size="5" color="red">
<?php
include("connection.php");
session_start();
$_SESSION['card']=$_POST['cardid'];
$sql1 = "SELECT * FROM `student` WHERE `CardId` = '".$_POST['cardid']."' ";
		$result = $conn->query($sql1);
		$data = mysqli_fetch_array($result);
		if ($result->num_rows == 1){
			if ($data['Status free']=='เปิด') {
				header("location:checkcard4.php");
			}
			else{
			  header("location:checkcard5.php");
			}

		}
else
	echo "ไม่พบบัตรของคุณอยู่ในระบบ";
?></font></div></center><br><br>
</body>
</html>