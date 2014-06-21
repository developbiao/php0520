<?php
/*
@Date:2014/06/21
@Author:GongBiao
@Describe:正则表达式的学习
*/

	header("Content-type:text/html; charset=utf-8");
	$sub = "www.google.com";


	$ptn = '/(\w+\.)?\w+\.\w+/';
	$rep = 'moto';
	//$ret = preg_replace($ptn, $rep, $sub, $count);
	preg_match($ptn, $sub, $mats);


	echo "<h3> 正则表达式的匹配</h3>";

	echo "<pre>";
	print_r($mats);
	//print_r($ret);
	echo "</pre>";

?>