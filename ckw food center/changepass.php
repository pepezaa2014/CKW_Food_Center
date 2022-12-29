<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href="box.css">
	<link rel="stylesheet" type="text/css" href="stylebuttext.css">
	<style>
	body{margin-top: 0;	
	}
	.button10 {
    width: 100px;
    height: 40px;
    background-color: #FFCD28;
    font-size: 16px;
    border-color: #FFCD28;
  font-family: Supermarket;  
  transition: .2s;
}

.button10:hover {
  background-color: #FF9B00;
  border-color: #FF9B00;

}
	html {
  background: url(https://images.unsplash.com/photo-1499244571948-7ccddb3583f1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1489&q=80) no-repeat center fixed;
  background-size: cover;
 }
 h1{color: white ;font-size: 80px; margin-top: 0; }
	</style>
</head>

<body>

<a href="clearshow1.php"><font face="Blern Regular" size="+1" color="white">ย้อนกลับ</font></a><br>
<font face="Blern Regular" size="60" color="white"><center><h1>Change Password</h1></font>

<div class="box2">
	
<font face="Supermarket" color="white" size="5"><center><form method="post" action="checkchangepass.php" autocomplete="off">
	หมายเลขประจำตัวนักเรียน <br> <input type="text" autofocus="" name="user"class="textbox" placeholder=" หมายเลขประจำตัวนักเรียน..."><br>
	รหัสผ่านเก่า <br> <input type="Password" name="oldpass" class="textbox" placeholder=" รหัสผ่านเก่า..."><br>
	รหัสผ่านใหม่ <br> <input type="Password" name="newpass"class="textbox" placeholder=" รหัสผ่านใหม่..."><br><br>
	<input type="submit" name="" value="ยืนยัน" class="button10"><br><br>
	</center></font>
<center><font face="" size="3" color="#68D168">	<?php
session_start();
include("connection.php");
if (isset($_SESSION['show'])) {
	echo $_SESSION['show'];
}

	?></font></center></div>
</form>
</body>
</html>