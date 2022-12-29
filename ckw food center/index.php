<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="box.css">
  <link rel="stylesheet" type="text/css" href="stylebuttext.css">
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
.btn-group .button9 {
  background-color: #FFF978;
  border: #33CC99;
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
}
.btn-group .button9:hover {
  background-color: #FFEB5A;
  box-shadow: 0 0 8px 0 black;
}
h1{color:  #F0F8FF; font-size: 60px;  }
h2{ color: #F0F8FF; font-size: 30px; }
h3{ color: #F0F8FF ; font-size: 30px; }

html {
  background: url(https://images.pexels.com/photos/459469/pexels-photo-459469.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940) no-repeat center fixed;
  background-size: cover;
}


	</style>
	<title>CKW FOOD CENTER</title>
</head>
<body >




<center><h1><font face="Prompt" >Welcome to CKW FOOD CENTER</font></h1><br>
 

<form method="post" action="checkuserstudent.php" autocomplete="off">
  <div class="box2">
	<font face="Supermarket"><h2>หมายเลขประจำตัวนักเรียน <input type="text"  name="user" autofocus placeholder=" หมายเลขประจำตัวนักเรียน..." class="textbox"></h2>
	<h3>รหัสผ่าน <br><input type="password" name="password" class="textbox" placeholder=" รหัสผ่าน..."></h3></font>
	<font face="Supermarket"><input type="submit" class="button2" value="ยืนยัน"></font>
</div>
	</form>

	<br> <br> <br><br><br><br> <br> <br><br><br><br> <br> <br> <br><br><br><br> <br> <br><br><br><br><br><br> <br><br><br><br> 
	
  <hr>
	<div class="btn-group">
  <a href="loginadmin.php"><button class="button">Admin</button></a>
  <a href="loginvendor.php"><button class="button">Vender</button></a>
  <a href="forgot.php"><button class="button">Forgot Password</button></a>
  <a href="changepass.php"><button class="button">Change Password</button></a>
  <a href="addmember.php"><button class="button9">สมัครสมาชิกใหม่</button></a>
</div>
  <hr>
</center>
</body>
</html>