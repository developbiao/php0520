<?php
/*
@Date:2014/06/21
@Author:GongBiao
@Describe:正则表达式的学习
*/

	header("Content-type:text/html; charset=utf-8");
	$sub = "www.google.com";

	$ptn = '/google|com/';

	preg_match_all($ptn, $sub, $mats);

	echo "<h3> 正则表达式的匹配</h3>";

	echo "<pre>";
	print_r($mats);
	echo "</pre>";

?>