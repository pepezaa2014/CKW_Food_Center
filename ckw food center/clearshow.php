<?php
session_start();
unset($_SESSION['show']);
unset($_SESSION['show1']);
header("location:index.php");
?>