<!DOCTYPE html>
<html>
<head>
	<title>Add Line Token</title>
	<link rel="stylesheet" type="text/css" href="box.css">
	<link rel="stylesheet" type="text/css" href="stylebuttext.css">
	<style>
		.btn-group .button11 {
  background-color: #FFC800; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  cursor: pointer;
  float: center;
  font-family: Supermarket;
  transition: .3s;
  width: 120px;
  height: 55px;
}

.btn-group .button11:hover {
  background-color: #FF8200;
}
html {
  background: url(https://images.pexels.com/photos/1565982/pexels-photo-1565982.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940) no-repeat center fixed;
  background-size: cover;
}
	</style>
</head>
<body>
	<?php
session_start();
	?>
	<a href="interfacestudent.php"><font color="white" size="4">ย้อนกลับ</font></a>
<div class="box2"><center>
	<div class="btn-group">
		<form action="addline.php" method="post" autocomplete="off">
			<font face="Supermarket" color="white" size="6">กรอก Line Token</font><input type="text" name="linetoken" class="textbox" autofocus="" placeholder=" กรอก Line Token"><br><br>
			<button class="button11"><font face="Supermarket" color="black">ส่งข้อมูล</font></button><br><br>
		</form>

	<font color=" white" size="4">Line Token : </font><a href="https://access.line.me/dialog/oauth/weblogin?response_type=code&client_id=1476232700&redirect_uri=https%3A%2F%2Fnotify-bot.line.me%2Flogin%2Fcallback&state=zL1E9nEchaVjKvtITX75SG&response_mode=form_post" target="_blank"><font color="FFE150" >https://notify-bot.line.me/en/</font></a><br><br>
	<font color="orange" size="3"><?php
if (isset($_SESSION['showline'])) {
	echo $_SESSION['showline'];
}
	?></font>
</center></div>
</div>
</body>
</html>