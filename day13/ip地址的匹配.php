<?php
/*
@Date:2014/06/21
@Author:GongBiao
@Describe:正则表达式的学习
*/


	header("Content-type:text/html; charset=utf-8");

	//匹配ip地址

	//$sub = "my ip is 192.168.10.1, php and linux 1.1.1.1";
	$sub = "172.139.2.69";

	$ptn = '/^\d+\.\d+\.+\d+\.\d+$/';
	

	preg_match_all($ptn, $sub, $mats);

	echo "<h3>ip地址的匹配</h3>";

	echo "<pre>";
	print_r($mats);
	echo "</pre>";


?>