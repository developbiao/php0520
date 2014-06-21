<?php
/*
@Date:2014/06/21
@Author:GongBiao
@Describe:正则表达式的学习
*/


	header("Content-type:text/html; charset=utf-8");

	//词边缘的匹配练习

	$sub = "linux and php,aaalinuxaaaa and linux and lamp is very mach";

	$ptn = '/\blinux\b/';

	//$count = preg_match_all($ptn, $sub, $mats);

	//echo "$count </br>";

	//替换的操作

	$rep = 'Centos';

	echo  preg_replace($ptn, $rep, $sub);   //返回替换后的结果


	echo "<pre>";
	print_r($mats);
	echo "</pre>";


?>