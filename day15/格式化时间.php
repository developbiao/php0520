<?php
/*
@Describe:日期函数的学习
@Author:GongBiao
@Date:2014/06/23
*/
	header("Content-Type:text/html; charset=utf-8");

	echo strtotime("2014/06/23");
	echo "<br>";
	echo date("Y-m-d H:i:s w t", 0);   //把毫秒转格式化时间




?>