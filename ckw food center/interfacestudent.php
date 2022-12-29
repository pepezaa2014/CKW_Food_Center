<!DOCTYPE html>
<html>
<head>

<link  rel="stylesheet" type="text/css" href="box.css"  >
<link rel="stylesheet" type="text/css" href="stylebuttext.css">

<!-- 	<meta HTTP-EQUIV="REFRESH" content="120; url=http://www.yourdomain.com/logout.php"> -->
	<style>
	.btn-group .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: center;
  font-family: Supermarket;
}

.btn-group .button:hover {
  background-color: #54BD54;
}
.btn-group .button10 {
  background-color: #FF5A5A; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: center;
  font-family: Supermarket;
  transition: .3s;
}

.btn-group .button10:hover {
  background-color: #EB3232;
}
.btn-group .button11 {
  background-color: #9EF048; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: center;
  font-family: Supermarket;
  transition: .3s;
}

.btn-group .button11:hover {
  background-color: #64CD3C;
}
.pic{
	height: 130px;
	width: 130px;
	border: 3px solid #282828; /* เส้นขอบขนาด 3px solid: เส้น #fff:โค้ดสีขาว */
    border-radius: 50%; /* ปรับเป็น 50% คือความโค้งของเส้นขอบ*/
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2); /* เงาของรูป */
}

html {
  background: url(https://images.pexels.com/photos/1565982/pexels-photo-1565982.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940) no-repeat center fixed;
  background-size: cover;
}
		img {
    border-radius: 50%;
}
	</style>
	<title>Student</title>




<!-- <script>
	var test;

window.onmousemove = setTime

function onUserInactivity() {
   window.location.href = "logout.php"
}
function setTime()
{
	clerTimeout(test)
	test=setTimeout(onUserInactivity, 1000 * 2 * 1)
}
</script> -->





</head>

<body >
<div class="btn-group">
<a href="logout.php"><button class="button1">Logout</button></a><br>
</div>
<center>


<?php
include("connection.php");
session_start();
$sql = "SELECT * FROM `student` WHERE `Number` = '".$_SESSION['user']."'  ";
$result = $conn->query($sql);
$data = mysqli_fetch_array($result);
$path ='image/';
?>
<div class="box2">
<font color="white" size="5" face="Supermarket">
<div class="pic"><img src="<?php echo $path.$data['imagename'] ; ?>" width="130px" height="130px" /><br></div>
<?php
echo '<br/>'."ชื่อ : ".$_SESSION['name'].'<br/>';
echo "ยอดจำนวนเงินคงเหลือ : ";
if ($data['Balance']<50) {
echo "<font color=\"red\">".$_SESSION['balance'].""."</font>"." บาท".'<br/>';
}
else
echo "<font color=\"green\">".$_SESSION['balance']."</font>"." บาท".'<br/>';
echo "สถานะของบัตร : ";
if ($_SESSION['status']=="สามารถใช้งานได้") {
	echo "<font color=\"green\">".$_SESSION['status']."</font>".'<br/>';
}
else{
	echo "<font color=\"red\">".$_SESSION['status']."</font>".'<br/>';
}
echo "การใช้งานอิสระ : ";
if ($_SESSION['free']=="เปิด") {
	echo "<font color=\"green\">".$_SESSION['free']."</font>".'<br/>';
}
else{
	echo "<font color=\"red\">".$_SESSION['free']."</font>".'<br/>';
}
?>
<div  class="btn-group" >
	<font face="Supermarket">
<br><a href="changefree1.php"><button class="button">เปิดการใช้งานอิสระ</button></a>
	<a href="changefree2.php"><button class="button10">ปิดการใช้งานอิสระ</button></a>
  <br><br><a href="addlinetoken.php"><button class="button11"><font color="black">Add Line Token</font></button></a>
	</div></font></div>





	<br><br>
	</center>


</body>
</html>