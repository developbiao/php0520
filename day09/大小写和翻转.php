<?php
/*
@Describe:字符串的处理
*/
	header("content-type:text/html; charset=utf-8");

	$str = "php is very much!";

	echo "<h3>". ucwords($str) ."</h3>";
	echo "<h3>". ucfirst($str) ."</h3>";
	echo "<h3>". strtoupper($str) ."</h3>";
	echo "<h3>". strtolower($str) ."</h3>";
	echo "<h3>". str_shuffle($str) ."</h3>";
	echo "<h3>". strrev($str) ."</h3>";  //字符串的翻转



?>