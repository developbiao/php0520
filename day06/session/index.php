<?php
/*
$_SESSION 
*/
	header("content-type:text/html; charset=utf-8");

	session_start();

	$_SESSION['name'] = "jokey";
	$_SESSION['class'] = "1234";

	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
?>