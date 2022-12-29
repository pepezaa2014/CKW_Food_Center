

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="box.css">
			<script>
window.setTimeout(function() {
    window.location = 'pay.php';
  }, 1700);
</script>
	<style >
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
  font-family: Blern Regular;
}
.box4 {
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
.btn-group .button:hover {
  background-color: #00FF00;
}
	html {
  background: url(https://images.unsplash.com/photo-1556742393-d75f468bfcb0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80) no-repeat center fixed;
  background-size: cover;
	</style>

</head>
<body>
	<div class="box4"><center>
		<center><font size="5" color="red">
<?php 

include("connection.php");
session_start();
$_SESSION['card']=$_POST['cardid'];
$_SESSION['pay']=$_POST['pay'];
$sql1 = "SELECT * FROM `student` WHERE `CardId` = '".$_SESSION['card']."' ";
		$result = $conn->query($sql1);
		$data = mysqli_fetch_array($result);
		if ($result->num_rows == 1) {
			if ($data['Statuscard']=="ไม่สามารถใช้งานได้") {
				echo "บัตรของคุณถูกอายัด ไม่สามารถใช้งานได้";
			}
			else{
        if ($_SESSION['pay']>$data['Balance']) {
          echo "ยอดเงินของคุณไม่เพียงพอ กรุณาเติมเงิน";
        }
        else
			     header("location:pay2.php");
    }
			}
			else
		echo "ไม่พบบัตรของคุณอยู่ในระบบ";
?></font>
</body>
</html>