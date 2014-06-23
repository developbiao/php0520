<?php
/*
@Describe:字符串的搜索
*/
	header("Content-Type:text/html; charset=utf-8");

	$arr = array(
		"php html",
		"linux system is good",
		"Centos kernel the linux",
		"php language developer web"
		);

	$ptn = '/php/';  //搜索字串是php的数据下标
	$arr2 = preg_grep($ptn, $arr);

	echo "<pre>";
	print_r($arr2);
	echo "</pre>";

?>