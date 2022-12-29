<!DOCTYPE html>
<html>
<head>
	<title>Vendor</title>
	<link rel="stylesheet" type="text/css" href="box.css">
	<style>
	.btn-group .button {
  background-color: #FFA2AD; /* Green */
  border: #FFA2AD;
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
  background-color: #FF5675;

}
.btn-group .button1 {
  background-color: #00BFFF; /* Green */
  border: #00BFFF;
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

.btn-group .button1:hover {
  background-color: #1E90FF;
  border-color: #5AE0FF;

}
html {
  background: url(https://images.unsplash.com/photo-1556742205-e10c9486e506?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80) no-repeat center fixed;
  background-size: cover;
}
</style>
	<?php
include("connection.php");
session_start();
      $sql = "SELECT * FROM `vendor` WHERE `Id` = '".$_SESSION['id']."' ";
      $result1 = $conn->query($sql);
      $data1 = mysqli_fetch_array($result1);
	?>
</head>
<body>
	<div class="btn-group">
<a href="logout.php"><font size="+2" color="white">Logout</font></a><br>
</div>
<div class="box2"><font color="white" size="5" face="Supermarket">
		<div class="btn-group">
<center><a href="10bath.php"><button class="button1">10 บาท (ขายน้ำ)</button></a></center><br>
<center><a href="20bath.php"><button class="button">20 บาท (ธรรมดา)</button></a>
<a href="25bath.php"><button class="button">25 บาท (พิเศษ)</button></a></center>
<font size="5" color="white"><?php
echo "<br/>"."ชื่อ : ";
echo "<font color=\"#63CC63\">".$data1['Name']."</font>";
echo "<br/>"."รายได้ทั้งหมด : ";
echo "<font color=\"#63CC63\">".$data1['Income']." บาท</font>";
echo "<br/>"."จำนวนน้ำที่ขาย : ";
echo "<font color=\"#63CC63\">".$data1['Sale10']." แก้ว</font>";
echo "<br/>"."จำนวนอาหารที่ขาย (ธรรมดา) : ";
echo "<font color=\"#63CC63\">".$data1['Sale20']." จาน</font>";
echo "<br/>"."จำนวนอาหารที่ขาย (พิเศษ) : ";
echo "<font color=\"#63CC63\">".$data1['Sale25']." จาน</font>";
?></font>
</div></font></div>
</body>
</html>