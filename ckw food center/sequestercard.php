<!DOCTYPE html>
<html>
<head>
	<title>Sequester Card</title>
	<link rel="stylesheet" type="text/css" href="box.css">
	<link rel="stylesheet" type="text/css" href="stylebuttext.css">
	<?php
session_start();
include 'connection.php';

  ?>
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
  transition: .2s;
}

.btn-group .button:hover {
  background-color: #3e8e41;
}
.button2 {
    width: 100px;
    height: 40px;
    background-color: #70F170;
    font-size: 16px;
    transition: .2s;
    border-color: #70F170;
    border-radius: 9px;

}
.button2:hover {
    border-color: #52E252;
    background-color: #52E252;

}
.button3 {
    width: 100px;
    height: 40px;
    background-color: #CD4646;
    font-size: 16px;
    transition: .2s;
    border-color: #CD4646;
    border-radius: 9px;

}
.button3:hover {
    border-color: #CD0000;
    background-color: #CD0000;

}
h1{color: #000000 ;font-size: 75px; margin-top: 0;}

html {
  background: url(https://images.unsplash.com/photo-1556742393-d75f468bfcb0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80) no-repeat center fixed;
  background-size: cover;
}
	</style>
</head>
<body>
	 <a href="clearshow3.php"><font size="+1" color="black">ย้อนกลับ</font></a>
<font face="Blern Regular"><h1><center>Sequester card</center></h1></font>
	<div class="box2">
		<center><div class="btn-group">
	<font size="5" color="white"><form method="post" action="checksequester.php" autocomplete="off">
		หมายเลขประจำตัวนักเรียน<input placeholder=" หมายเลขประจำตัวนักเรียน..." type="text" name="numstudent" class="textbox" autofocus=""><br><br>
		รหัสผ่าน<br><input placeholder=" รหัสผ่าน..." type="password" name="password" class="textbox"><br><br>
    รหัสยืนยันตัวตน<br><input placeholder=" รหัสยืนยันตัวตน..." type="password" name="secure" class="textbox"><br><br>
		<button type="submit" class="button2" value="ยืนยัน">ยืนยัน</button></font>
    <br><br><font face="Blern Regular" size="3" color="red"><?php
    if (isset($_SESSION['show4'])) {
echo $_SESSION['show4'];
    }
    ?></font>
	</form>

	</div></div></center>
</body>
</html>