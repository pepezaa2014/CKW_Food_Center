<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
<link rel="stylesheet" type="text/css" href="box.css">
  	<?php
include("connection.php");
session_start();
	?>
	<style>
	.btn-group .button {
  background-color: #C1CDCD;
  border: #33CC99;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  cursor: pointer;
  float: center;
  font-family: Supermarket;
  transition: .2s;
  width: 200px;
  height: 50px;
}

.btn-group .button:hover {
  background-color: #FFE4C4;
  box-shadow: 0 0 8px 0 black;
}
  .btn-group .button10 {
  background-color: #CD426B;
  border: #33CC99;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  cursor: pointer;
  float: center;
  font-family: Supermarket;
  transition: .2s;
  width: 200px;
  height: 50px;
}

.btn-group .button10:hover {
  background-color: #CD1F48;
  box-shadow: 0 0 8px 0 black;
}
  .btn-group .button11 {
  background-color: #CD426B;
  border: #33CC99;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 17.72px;
  cursor: pointer;
  float: center;
  font-family: Supermarket;
  transition: .2s;
  width: 200px;
  height: 50px;
}

.btn-group .button11:hover {
  background-color: #CD1F48;
  box-shadow: 0 0 8px 0 black;
}

  .btn-group .button9 {
  background-color: #FFF978;
  border: #33CC99;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  cursor: pointer;
  float: center;
  font-family: Supermarket;
  transition: .2s;
  width: 200px;
  height: 50px;
}

.btn-group .button9:hover {
  background-color: #FFEB5A;
  box-shadow: 0 0 8px 0 black;
}

.box1 {
    position: absolute;
    top: 50%;
    left: 50%;

    width: 700px;
    padding: 60px;
    box-sizing: border-box;

    transform: translate(-50%, -50%);

    border-radius: 10px;
    background: rgba(0,0,0,.8);
    box-shadow: 0 15px 25px rgba(0,0,0,.5);
}

.box1 h2 {
    padding: 0;
    margin: 0 0 30px;

    text-align: center;

    color: #fff;
    color: #00ff7f;
}

.box1 h3 {
    padding: 0;
    margin: 0 0 30px;

    text-align: center;

    color: #fff;
    color: #00ff7f;
}

h1{color: #000000 ;font-size: 80px; margin-top: 0;}
	html {
  background: url(https://images.unsplash.com/photo-1556742393-d75f468bfcb0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80) no-repeat center fixed;
  background-size: cover;}
</style>


</head>
<body>
  <a href="logout.php"><font size="+2" color="black">Logout</font></a>
	<font color="black" face="Blern Regular"><h1><center>Admin</center></h1></font>
	<center><div class="box1" >
		<div class="btn-group">


<a href="pay.php"><button class="button">การจ่ายเงินในสหกรณ์</button></a>
<a href="seetotal.php"><button class="button">ดูยอดเงินที่หักจากแม่ค้า</button></a><br><br>
<a href="sequestercard.php"><button class="button">อายัดบัตร</button></a>
<a href="changecard.php"><button class="button">เปลี่ยนบัตร</button></a><br><br>
<a href="topupmoney.php"><button class="button">เติมเงิน</button></a>
<a href="withdrawmoney.php"><button class="button">ถอนเงิน</button></a><br><br>
  <a href="addmember2.php"><button class="button9">สมัครสมาชิกใหม่</button></a>
<a href="reset.php"><button class="button11">รีเซ็ตจำนวนอาหารที่ขาย</button></a><br><br>
<center><font size="5px" color="orange" face="Supermarket"><br><?php  
if (isset($_SESSION['show'])) {
  echo $_SESSION['show'];
}
?></font></center>

</div></div></center>
</body>
</html>