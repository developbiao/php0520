<?php
/*
字符中的比较
*/
	header("content-type:text/html; charset=utf-8");
	$a = "A12";
	$b = "A1tr3";

	//var_dump(strnatcmp($a, $b));
	var_dump(strnatcasecmp($a, $b));
?>