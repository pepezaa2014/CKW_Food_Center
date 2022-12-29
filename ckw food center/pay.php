<!DOCTYPE html>
<html>
<head>
	<title>Co-Operative</title>
	<link rel="stylesheet" type="text/css" href="box.css">
  <link rel="stylesheet" type="text/css" href="Stylebuttext.css">
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
}
	</style>
	<?php
session_start();
	?>
</head>
<body>

  <a href="clearshow3.php"><font size="+1" color="black">ย้อนกลับ</font></a>
     <center><font face="Blern Regular"><h1><center>Pay Co-Operative</center></h1></font>
	<center><div class="box2">
<form action="pay1.php" method="post" autocomplete="off">
	<font size="5" color="white">ราคาสินค้าทั้งหมด<input placeholder=" ราคาสินค้าทั้งหมด..." type="number" name="pay" type="text" class="textbox"><br>
	สแกนบัตร<input placeholder=" สแกนบัตร..." type="text" name="cardid" class="textbox" type="text"></font><br><br>
	<input type="submit" class="button2" value="ยืนยัน"><br>
<br><font face="" size="3" color="orange">
  <?php 
if (isset($_SESSION['show2'])) {
  echo $_SESSION['show2'];
}
?>
  
</font></form>
</div></center>

</body>
</html>