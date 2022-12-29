<?php
	$conn = new mysqli ('localhost', 'root', '', 'ckw food center');
		if( $conn -> connect_errno){
			die("Connection Failed". $conn->connect_error);
		}
		$conn->query("set names utf8");
?>