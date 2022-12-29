<!DOCTYPE html>
<html>
<head>
	<title>Vendor</title>
	<link rel="stylesheet" type="text/css" href="box.css">
	<link rel="stylesheet" type="text/css" href="stylebuttext.css">
</head>
<body>
	<style >
	body{
		margin-top: 0;
	}
	.btn-group .button {
  background-color: #F4A460; /* Green */
  border: #98EBDC;
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
  background-color: #FFE4C4;
}
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
h1{color: #000000; margin-top:0; font-size: 80px;}
		html {
  background: url(https://images.unsplash.com/photo-1556742205-e10c9486e506?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80) no-repeat center fixed;
  background-size: cover;
}
	</style>
		<a href="index.php"><font size="+1" color="white">ย้อนกลับ</font></a>
	<font face="Blern Regular"><center><h1>For Vendor</h1></center></font>
		<div class="box2"><center>
<form method="post" action="checkuservendor.php" autocomplete="off"><font face="Supermarket" size="7px" color="white">
	<font size="+3">ชื่อผู้ใช้</font><br><input placeholder=" ชื่อผู้ใช้..." type="text" name="user" class="textbox"><br>
	<font size="+3">รหัสผ่าน</font><input type="password" name="password" placeholder=" รหัสผ่าน..." class="textbox"><br>
	<input type="submit" value="ยืนยัน" class="button2">
	</font></form></center></div><br><br>
	</center>
</body>
</html>