<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="box.css">
	<link rel="stylesheet" type="text/css" href="stylebuttext.css">
	<?php
include("connection.php");
	?>
	<style>
	.button2 {
    width: 100px;
    height: 40px;
    background-color: #FF7E9D;
    font-size: 16px;
    transition: .2s;
    border-color: #FFA374;
    border-radius: 9px;

}
.button2:hover {
    border-color: #FF848F;
    background-color: #FF607F;

}
		h1{color: white ;font-size: 80px; margin-top: 0; }
		html {
  background: url(https://images.unsplash.com/photo-1505826759037-406b40feb4cd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1052&q=80) no-repeat center fixed;
  background-size: cover;

	</style>
</head>

<body>
<a href="index.php"><font size="-0" color="white">กลับสู่หน้าหลัก</font></a>

	<center><font face="Blern Regular"><h1>For Admin</h1></font></center>
	<div class="box2">
	<font face="Supermarket" size="10" color="white"><center>
		<form method="post" action="checkuseradmin.php" autocomplete="off">
	<font size="+3">ชื่อผู้ใช้งาน</font><input type="text" name="user" class="textbox" placeholder=" ชื่อผู้ใช้งาน..."><br>
	<font size="+3">รหัสผ่าน</font><input type="password" name="password" class="textbox" placeholder=" รหัสผ่าน...">
	<input type="submit" class="button2" value="ยืนยัน">
	</form></center></font></div>
	

</body>
</html>
