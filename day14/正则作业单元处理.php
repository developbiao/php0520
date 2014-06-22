<?php
	header("Content-Type:text/html; charset=utf-8");

	//eval("\$str = \"abc\";");  //eval的一个小实验

	//echo $str;

	$str = "123 php";
	$ptn = '/(\d+)(\s)(\w+)/';   //e的作用就是eval
	$rep = '$3$2$1';  //做为单元来处理

	$str2 =  preg_replace($ptn, $rep, $str);

	echo "<pre>";
	print_r($str2);
	echo "</pre>";
?>