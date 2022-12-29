<?php
session_start();
if (isset($_SESSION['show2'])) {
	unset($_SESSION['show2']);
}
elseif (isset($_SESSION['show4'])) {
unset($_SESSION['show4']);
}
elseif (isset($_SESSION['show5'])) {
unset($_SESSION['show5']);
}
elseif (isset($_SESSION['show6'])) {
	unset($_SESSION['show6']);
}
elseif (isset($_SESSION['show7'])) {
	unset($_SESSION['show7']);
}
header("location:interfaceadmin.php");
?>