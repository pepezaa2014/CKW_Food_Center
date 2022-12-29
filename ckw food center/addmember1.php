
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="box.css">
	<style>
	.button {
  background-color: #CC47AD;
  border: #CC47AD;
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

.button:hover {
  background-color: #CD1039;
  box-shadow: 0 0 8px 0 black;
}

	</style>
</head>
<body>
<?php
include("connection.php");
session_start();
$name=$_POST['user'];
$number=$_POST['number'];
$password=$_POST['password'];
$money=$_POST['money'];
$secure=$_POST['secure'];
$card=$_POST['card'];
		if (($name!="")&&($number!="")&&($password!="")&&($secure!="")&&($money!=""))
		{
			$insert1 = "INSERT INTO `student` (`Number`, `Name`, `CardId`, `Balance`, `Statuscard`, `Secure code`, `Status free`, `imagename`) VALUES ('$number', '$name', '$card', '$money', 'สามารถใช้งานได้', '$secure', 'ปิด', 'student.png')";
			$insert2 ="INSERT INTO `checkuserstudent` (`Number`, `Password`, `Secure code`) VALUES ('$number', '$password', '$secure')";
			$sent1 = $conn->query($insert1);
			$sent2 = $conn->query($insert2);
			header("location:addmember.php");
		}
		elseif (($name!="")&&($number!="")&&($password!="")&&($secure!="")&&($money=="")) {
			$insert1 = "INSERT INTO `student` (`Number`, `Name`, `CardId`, `Balance`, `Statuscard`, `Secure code`, `Status free`, `imagename`) VALUES ('$number', '$name', '$card', '0', 'สามารถใช้งานได้', '$secure', 'ปิด', 'student.png')";
			$insert2 ="INSERT INTO `checkuserstudent` (`Number`, `Password`, `Secure code`) VALUES ('$number', '$password', '$secure')";
			$sent1 = $conn->query($insert1);
			$sent2 = $conn->query($insert2);
			$_SESSION['show']=" *** สมัครสมาชิกเรียบร้อยแล้ว *** ";
			$_SESSION['show1']=1;
			header("location:addmember.php");
		}

		else {
			$_SESSION['show1']=2;
			$_SESSION['show']=" *** กรุณากรอกข้อมูลให้ครบ *** ";
			header("location:addmember.php");
		}
?>
<a href=""></a>
</body>
</html>