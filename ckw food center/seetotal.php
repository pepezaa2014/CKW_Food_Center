<!DOCTYPE html>
<html>
<head>
	<title>Total</title>
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
<a href="interfaceadmin.php"><font color="black" size="+1.5" face="Supermarket">กลับสู่หน้าหลัก</font></a>
<a href="seetotalday.php" ><button class="button1">ดูยอดในแต่ละวัน</button></a><br><br>
<div><font face="Supermarket" size="+1">
<?php
include("connection.php");
session_start();
$sql1 = "SELECT * FROM `vendor` ORDER BY Id asc ";
$result = $conn->query($sql1);
$sql = "SELECT * FROM `checkuseradmin` ORDER BY ID asc ";
$result1 = $conn->query($sql);
$total=0;
$total1=0;
$total2=0;
$total3=0;
$total4=0;
echo "<table border='5' align='center' width='1000' color='black'>";
echo "<tr align='center' bgcolor='#FFD228'><td>ชื่อ</td><td>รายได้ทั้งหมด (บาท)</td><td>จำนวนน้ำที่ขาย (แก้ว)</td><td>จำนวนอาหารที่ขาย (ธรรมดา)</td><td>จำนวนอาหารที่ขาย (พิเศษ)</td><td>ยอดเงินที่หักจากแม่ค้า</td>";
while ($row = mysqli_fetch_array($result)) {
	$total+=$row['Vat food center'];
	$total2+=$row['Sale20'];
	$total3+=$row['Sale10'];
	$total4+=$row['Income'];
	$total1+=$row['Sale25'];
	echo "<tr align='center bgcolor='#CCCCCC'>";
  echo "<td align='left' bgcolor='#FFA374'>" .$row["Name"] .  "</td> "; 
  echo "<td align='center' bgcolor='#FFC192'>" .$row["Income"] .  "</td> ";  
  echo "<td align='center' bgcolor='#FFC192'>" .$row["Sale10"] .  "</td> ";
  echo "<td align='center' bgcolor='#FFC192'>" .$row["Sale20"] .  "</td> ";
  echo "<td align='center' bgcolor='#FFC192'>" .$row["Sale25"] .  "</td> ";
  echo "<td align='center' bgcolor='#FFC192'>" .$row["Vat food center"] . "</td>";
}
while ($row = mysqli_fetch_array($result1)) {
$total+=$row['Vat'];
	$total4+=$row['Total'];
	echo "<tr align='center bgcolor='#CCCCCC'>";
  echo "<td align='left' bgcolor='#FFA374'>" .$row["Name"] .  "</td> "; 
  echo "<td align='center' bgcolor='#FFC192'>" .$row["Total"] .  "</td> ";  
  echo "<td align='center' bgcolor='#FFC192'>" ."-" .  "</td> ";
  echo "<td align='center' bgcolor='#FFC192'>" ."-".  "</td> ";
  echo "<td align='center' bgcolor='#FFC192'>" ."-" .  "</td> ";
  echo "<td align='center' bgcolor='#FFC192'>" .$row["Vat"] . "</td>";
	}

echo "<tr align='center bgcolor='#CCCCCC'>";
echo "<td align='left' bgcolor='#FFA374'>" ."รวม" .  "</td> "; 
echo "<td align='center' bgcolor='#FFC192'>" .$total4 .  "</td> ";  
echo "<td align='center' bgcolor='#FFC192'>" .$total3 .  "</td> ";
echo "<td align='center' bgcolor='#FFC192'>" .$total2.  "</td> ";
echo "<td align='center' bgcolor='#FFC192'>" .$total1 .  "</td> ";
echo "<td align='center' bgcolor='#FFC192'>" .$total . "</td>";
?>
</font></div>

</body>
</html>

