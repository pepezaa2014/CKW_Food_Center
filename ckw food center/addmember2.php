<!DOCTYPE html>
<html>
<head>
	<title>Add Member</title>
  <?php
session_start();
include("connection.php");
  ?>
	<link rel="stylesheet" type="text/css" href="box.css">
	<style>
		h1{color: #000000 ;font-size: 75px; margin-top: 0;}
		.box3 {
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
.box3 .textbox {
    width: 300px;
    height: 30px;
    margin-left: 0px;
    box-sizing: border-box;
    padding: 10px 0px;
    transition: .2s;
    font-size: 15px; 
    border: 4px  #aaa;
    border-radius: 4px;
    font-family: Supermarket;
}
.box3 .textbox:focus {
    border-color: #6e6e6e;
    box-shadow: 0 0 8px 0 #6e6e6e;
}
.btn-group .button {
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

.btn-group .button:hover {
  background-color: #FFEB5A;
  box-shadow: 0 0 8px 0 black;
}
.button10 {
    width: 100px;
    height: 40px;
    background-color: #FFC6C3;
    font-size: 16px;
    transition: .2s;
    border-color: #FFC6C3;

}
.button10:hover {
    box-shadow: 0 0 8px 0 #FF7A85;
    background-color: #FF7A85;
    border-color: #FF7A85;

}
.text{
	  font-family: Supermarket;
	    font-size: 20px;
}



html {
  background: url(https://cdn.pixabay.com/photo/2015/01/15/16/17/hands-600497_1280.jpg) no-repeat center fixed;
  background-size: cover;}


	</style>
</head>
<body>

	<a href="clearshow.php"><font size="+0" color="black">ย้อนกลับ</font></a>
		<font face="Blern Regular"><h1><center>New Member</center></h1></font>

<div class="box3">
			<div class="btn-group">
<font size="5" color="white"><form method="post" action="addmember1.php" autocomplete="off">
	<a class="text">ชื่อผู้ใช้ : </a> <input placeholder=" ชื่อผู้ใช้..." type="text" name="user" class="textbox" style="margin-left: 120px;"><br>
	<a class="text">หมายเลขประจำตัว : </a> <input style="margin-left: 48px;"placeholder=" หมายเลขประจำตัว..." type="num ber" name="number" class="textbox"><br>
	<a class="text">รหัสผ่าน : </a><input style="margin-left: 110px;" placeholder=" รหัสผ่าน..." type="password" name="password" class="textbox"><br>
	<a class="text">จำนวนเงินที่ต้องการเติม : </a><input style="margin-left: 17px;" placeholder=" จำนวนเงินที่ต้องการจะเติม..." type="number" name="money" class="textbox"><br>
	<a class="text">รหัสยืนยันตัวตน : </a><input style="margin-left: 58px;" placeholder=" กรอกรหัสยืนยันตัวตน..." type="password" name="secure" class="textbox"><br>
	<a class="text">สแกนบัตร : </a><input style="margin-left: 101px;" placeholder=" สแกนบัตร..." type="text" name="card" class="textbox"><br><br>
	<center><input type="submit" value="ยืนยัน" class="button10"></center></font>
	</form></div><br>
  
 <center>
<font size="3px" color="green" face="Supermarket">
  <?php
if (isset($_SESSION['show1'])) {
if ($_SESSION['show1']==1) {
  echo $_SESSION['show'];
}
?>
  
</font>
<font size="3px" color="red" face="Supermarket"><?php 
if ($_SESSION['show1']==2) {
  echo $_SESSION['show'];
}
}
else
  ?>
</font>
</center></div>
</body>
</html>