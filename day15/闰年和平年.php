<?php
/*
@Describe:日期函数的学习
@Author:GongBiao
@Date:2014/06/23
*/
	header("Content-Type:text/html; charset=utf-8");

	date_default_timezone_set("UTC");

	echo date_default_timezone_get();

	echo date("y-n-D t", time());
	echo "<br/>";
	$var =  date("L");

	if ($var == 0){
		echo "今年是平年";
	}else{
		echo "今年是闰年";
	}


?>