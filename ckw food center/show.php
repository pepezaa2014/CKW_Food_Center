<?php
include("connection.php");
session_start();
echo "รหัสผ่านของคุณคือ : ".$_SESSION['password'];

?>
<br><a href="index.php"><button>กลับสู่หน้าหลัก</button></a>