<?php
	header("Content-Type:text/html; charset=utf-8");

	echo "<h3>时间的操作</h3>";

	$str = "06-22-2014";
	//2014/06/22  输入出的格式
	$ptn = '/(\d+)-(\d+)-(\d+)/';
	$rep = '$3/$1/$2';

	$str2 = preg_replace($ptn, $rep, $str);

	echo "<pre>";
	print_r($str2);
	echo "</pre>";
?>