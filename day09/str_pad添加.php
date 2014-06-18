<?php
/*
str_pad
*/
	header("content-type:text/html; charset=utf-8");

	$input = "Alien";
	echo "<h3>".str_pad($input, 10)."---</h3>";
	echo "<h3>".str_pad($input, 10, "-=", STR_PAD_LEFT)."---</h3>";
	echo "<h3>".str_pad($input, 10, ">", STR_PAD_RIGHT)."---</h3>";
	echo "<h3>".str_pad($input, 13, "$")."---</h3>";

?>