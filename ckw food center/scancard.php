<!DOCTYPE html>
<html>
<head>
	<title>Scancard</title>
	<link rel="stylesheet" type="text/css" href="box.css">
  <link rel="stylesheet" type="text/css" href="stylebuttext.css">
  <?php
session_start();
?>
	 <style >
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
  font-family: Blern Regular;
}

.btn-group .button:hover {
  background-color: #3e8e41;
}
	 	html {
  background: url(https://images.unsplash.com/photo-1556742205-e10c9486e506?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80) no-repeat center fixed;
  background-size: cover;

}
.text{
    font-family: Supermarket;
      font-size: 28px;
      color: white;
}
.button1 {
    width: 100px;
    height: 40px;
    background-color: #FFC6C3;
    font-size: 16px;
    transition: .2s;
    border-color: #FFC6C3;

}
.button1:hover {
    box-shadow: 0 0 8px 0 black;
    border-color: #FF5675 ;
    background-color: #FF5675;
}

	 </style>


</head>
<body>
  <a href="interfacevendor.php"><font size="+1" color="white">ย้อนกลับ</font></a>
	<center><div class="box2">
<form action="checkcard.php" method="post" autocomplete="off">
	<div class="text">สแกนบัตรนักเรียน</div><br><input type="text" autofocus="" name="cardid" class="textbox" placeholder=" สแกนบัตรนักเรียน..."><br><br>
	<input type="submit" value="ยืนยัน" class="button1">
</form></div></center>

</body>
</html>