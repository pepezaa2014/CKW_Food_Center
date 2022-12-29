<?php
session_start();
if (isset($_SESSION['show'])) {
	unset($_SESSION['show']);
}
header("location:pay.php");
?>