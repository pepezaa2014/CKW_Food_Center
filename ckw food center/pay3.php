<!DOCTYPE html>
<html>
<head>
	<?php
include("connection.php");
session_start();
	?>
	<title>Check Secure Code</title>
	<link rel="stylesheet" type="text/css" href="box.css">
	<link rel="stylesheet" type="text/css" href="stylebuttext.css">
<style>
	.button2 {
    width: 100px;
    height: 40px;
    background-color: #FFD5A6;
    font-size: 16px;
    transition: .2s;
    border-color: #FFA374;
    border-radius: 9px;

}
.button2:hover {
    border-color: #FFA374;
    background-color: #FFA98F;

}
html {
  background: url(https://images.unsplash.com/photo-1556742393-d75f468bfcb0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80) no-repeat center fixed;
  background-size: cover;
}
</style>
</head>
<body>
	<a href="pay.php"><font face="Blern Regular" size="+1" color="black">ย้อนกลับ</font></a>
<div class="box2"><form method="post" action="pay4.php" autocomplete="off"><center>
<font face="Blern Regular" color="white" size="5">รหัสยืนยันตัวตน</font><br><br><input type="password" name="securecode" autofocus="" placeholder=" รหัสยืนยันตัวตน..." class="textbox"><br><br>
<input type="submit" name="" value="ยืนยัน" class="button2"></center></div>
</form>
</body>
</html>