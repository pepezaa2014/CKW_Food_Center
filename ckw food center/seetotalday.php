<!DOCTYPE html>
<html>
<head>
	<title>Total (Anotherday)</title>
	<link rel="stylesheet" type="text/css" href="box.css">
  <style >


    .btn-group .button {
  background-color: #00FF00; /* Green */
  border: #33CC99;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: center;
  font-family: Blern Regular;
}

.btn-group .button:hover {
  background-color: #00EE00;
}
.button1 {
  background-color: #FFF064;
  border: #FFF064;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 17px;
  cursor: pointer;
  float: center;
  font-family: Supermarket;
  transition: .2s;
  width: 160px;
  height: 50px;
  padding: 0 0 0 0;
    margin-top: 0px;
    margin-left: 1240px;

}
.button1:hover {
  background-color: #FFC81E;
  box-shadow: 0 0 8px 0 #FFC81E;
}
  html {
  background: url(https://images.unsplash.com/photo-1556742393-d75f468bfcb0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80) no-repeat center fixed;
  background-size: cover;
  </style>
</head>
<body>
	<a href="seetotal.php"><font color="black" size="+1.5" face="Supermarket">ย้อนกลับ</font></a>
<div><font face="Supermarket" size="+1">
<?php
include("connection.php");
session_start();
$sql1 = "SELECT * FROM `totalperday` ORDER BY Day asc ";
$result = $conn->query($sql1);

echo "<table border='5' align='center' width='1000' color='black'>";
echo "<tr align='center' bgcolor='#F4A460'><td>วัน</td><td>รายได้ทั้งหมด (บาท)</td><td>ยอดเงินที่หักจากแม่ค้า (บาท)</td>";
while ($row = mysqli_fetch_array($result)) {
	echo "<tr align='center bgcolor='#CCCCCC'>";
  echo "<td align='left' bgcolor='#FFB0CF'>" .$row["Day"] .  "</td> "; 
  echo "<td align='center' bgcolor='#FFC6C3'>" .$row["Total"] .  "</td> ";  
  echo "<td align='center' bgcolor='#FFC6C3'>" .$row["Vat"] .  "</td> ";
}
?>
</font></div>
</body>
</html>