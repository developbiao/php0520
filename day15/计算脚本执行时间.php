<?php
/*
@Describe:日期函数的学习
@Author:GongBiao
@Date:2014/06/23
*/
	header("Content-Type:text/html; charset=utf-8");

	echo microtime(1);
	exit();
	//毫秒微秒的相关函数

	$stime =  microtime(1);
	sleep(1);  //计算脚本执行时间

	$etime = microtime(1);

	echo $etime - $stime;


	/*
	上午学习内容总结：
	time();返回当前时间缀
	date()Y-m-d 格式化时间
	strtotime();
	GMT,UTC,PRC
	date_default_timezone_set();
	date_default_timezone_get();
	*/


?>