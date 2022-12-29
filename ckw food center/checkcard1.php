<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="box.css">
		<link rel="stylesheet" type="text/css" href="stylebuttext.css">
	<?php
include("connection.php");
session_start();
	?>
	<title>Check Secure Code</title>
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
.button1 {
    width: 100px;
    height: 40px;
    background-color: #FFC6C3;
    font-size: 16px;
    transition: .2s;
    border-color: #FFC6C3;

}
.button1:hover {
    box-shadow: 0 0 8px 0 black;
    border-color: #FF5675 ;
    background-color: #FF5675;
}
.text{
    font-family: Supermarket;
      font-size: 28px;
      color: white;
}
html {
  background: url(https://images.unsplash.com/photo-1556742205-e10c9486e506?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80) no-repeat center fixed;
  background-size: cover;
}
</style>
</head>
<body>
  <a href="scancard.php"><font size="+1" color="white">ย้อนกลับ</font></a>
  <center><div class="box2">
<form method="post" action="checkcard3.php">
<div class="text">รหัสยืนยันตัวตน<br></div><input type="password" name="securecode" class="textbox" placeholder=" รหัสยืนยันตัวตน..."><br><br>
<input type="submit" name="" class="button1" value="ยืนยัน"></div></center>
</form>
</body>
</html>