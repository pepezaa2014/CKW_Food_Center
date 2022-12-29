<!DOCTYPE html>
<html>
<head>
	<title>Top-Up</title>
	<link rel="stylesheet" type="text/css" href="box.css">
  <link rel="stylesheet" type="text/css" href="stylebuttext.css">
  <?php
session_start();
  ?>
	<style>
		.btn-group .button {
  background-color: #00CD00; /* Green */
  border: #33CC99;
  color: black;
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
  background-color: #00FF00;
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
h1{color: #000000 ;font-size: 75px; margin-top: 0;}
	html {
  background: url(https://images.unsplash.com/photo-1556742393-d75f468bfcb0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80) no-repeat center fixed;
  background-size: cover;
	</style>
</head>
<body>
   <a href="clearshow3.php"><font size="+1" color="black">ย้อนกลับ</font></a>
   <center><font face="Blern Regular"><h1><center>Top-Up</center></h1></font>
		<div class="box2">
<form method="post" action="topup.php" autocomplete="off">
	<font size="5" color="white" >หมายเลขประจำตัวนักเรียน <input placeholder=" หมายเลขประจำตัวนักเรียน..." autofocus="" type="text" name="user" class="textbox"><br>
	จำนวนเงินที่ต้องการจะเติม <input placeholder=" จำนวนเงินที่ต้องการจะเติม..." type="number" name="money" class="textbox"></font><br>
	<br>
	<input type="submit" class="button2" value="ยืนยัน"><br><br>
<font face="" color="orange" size="3"><?php
if (isset($_SESSION['show6'])) {
  echo $_SESSION['show6'];
}
?></font></div></center>
</form>
</body>
</html>