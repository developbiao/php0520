<?php
	header("Content-Type:text/html; charset=utf-8");

	//用正则拆分
	$str = join("-", range(a,z));
	echo $str;

	$arr = preg_split("/-/", $str);

	echo "<pre>";
	print_r($arr);
	echo "</pre>";
?>