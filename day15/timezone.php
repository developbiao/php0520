<?php
/*
@Describe:日期函数的学习
@Author:GongBiao
@Date:2014/06/23
*/
	header("Content-Type:text/html; charset=utf-8");

	//默认的是UTC
	//中国PRC
	//echo date("Y-m-d H:i:s", time() + 8 * 3600);  
	date_default_timezone_set("UTC");  //设置timezone
	echo "<h3>当前的时间区域:". date_default_timezone_get()."</h3>";  //获取时间区域
	echo date("Y-m-d  H:i:s", time());


?>