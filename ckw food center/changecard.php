<!DOCTYPE html>
<html>
<head>
	<title>Change Card</title>
  <?php
session_start();
include("connection.php");
  ?>
	<link rel="stylesheet" type="text/css" href="box.css">
	<style >
		.btn-group .button {
  background-color: #33CC00; 
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
h1{color:  #F0F8FF; font-size: 60px;  }
h2{ color: #F0F8FF; font-size: 30px; }
h3{ color: #F0F8FF ; font-size: 30px; }
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
html {
  background: url(https://images.unsplash.com/photo-1556742393-d75f468bfcb0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80) no-repeat center fixed;
  background-size: cover;
}
h1{color: #000000 ;font-size: 75px; margin-top: 0;}
.textbox {
    width: 300px;
    height: 30px;
    margin: 8px 0;
    box-sizing: border-box;

    transition: .2s;
    font-size: 15px; 
    border: 4px  #aaa;
    border-radius: 4px;
    font-family: Supermarket;
}
.textbox:focus {
    border-color: #6e6e6e;
    box-shadow: 0 0 8px 0 #6e6e6e;
}

	</style>
</head>
<body>
	 <a href="clearshow3.php"><font size="+1" color="black">ย้อนกลับ</font></a>
<font face="Blern Regular"><h1><center>Change Card</center></h1></font>

	<div class="box2">
		<div class="btn-group">
	<center><font size="5" color="white"><form method="post" action="sentchangeidcard.php" autocomplete="off">
		หมายเลขประจำตัวนักเรียน<br><input placeholder=" หมายเลขประจำตัวนักเรียน..." type="text" name="numstudent" class="textbox" autofocus=""><br>
		รหัสผ่าน<br><input type="password" placeholder=" รหัสผ่าน..."  name="password" class="textbox"><br>
    รหัสยืนยันตัวตน<br><input type="password" placeholder=" รหัสยืนยันตัวตน..."  name="secure" class="textbox"><br>
		บัตรใหม่<br><input type="text" placeholder=" บัตรใหม่..."  name="newidcard" class="textbox"><br></font><br>
		<button type="submit" class="button2" value="ยืนยัน">ยืนยัน</button><br><br>
<font face="Blern Regular" color="orange" size="3"><?php
if (isset($_SESSION['show5'])) {
  echo $_SESSION['show5'];
}
?></font>
  </center>
	</form>
	</div></div>
</body>
</html>