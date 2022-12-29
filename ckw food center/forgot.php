<!DOCTYPE html>
<html>
<head>
	<title>Forget Password</title>
	<link rel="stylesheet" type="text/css" href="box.css">
	<link rel="stylesheet" type="text/css" href="stylebuttext.css">
		<style>
		body{
			margin-top: 0;	
		}
.button10 {
    width: 100px;
    height: 40px;
    background-color: #FFFF96;
    font-size: 16px;
    border-color: #FFFF96;
  font-family: Supermarket;  
  transition: .2s;
}

.button10:hover {
  background-color: #FFE650;
  border-color: #FFE650;

}
		html {
  background: url(https://images.unsplash.com/photo-1457131760772-7017c6180f05?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1036&q=80) no-repeat center fixed;
  background-size: cover;
}
		h1{color: black ;font-size: 80px; margin-top: 0; }
	</style>
</head>
<body>

	<a href="clearshow1.php"><font face="Blern Regular" size="+1" color="white">ย้อนกลับ</font></a><br>
	<font face="Blern Regular" size="60"><center><h1>Forgot Password</h1></font>

<div class="box2">
<font face="Supermarket"><form action="sentforget.php" method="post" autocomplete="off">
	<font size="6px" color="white">หมายเลขประจำตัวนักเรียน <br> <input type="text" name="user" class="textbox" placeholder=" หมายเลขประจำตัวนักเรียน..."><br>
	รหัสยืนยันตัวตน <br> <input type="password" name="secure" class="textbox" placeholder=" รหัสยืนยันตัวตน..."><br><br>
	<input type="submit" name="" class="button10" value="ยืนยัน"></font>
<br><br>
<center><font face="Blern Regular" color="#68D168"><?php
session_start();
include("connection.php");
if (isset($_SESSION['show'])) {
echo $_SESSION['show'];
}
?></font></center></div>
</center></font>
</form></font>


</body>
</html>