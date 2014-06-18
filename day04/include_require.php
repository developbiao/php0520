<?php
/*
@Describe:include,require的区别
*/
	header("Content-type:text/html; charset=utf-8");

	//inlcude out file
	include("./inc.php");
	//require("./in.php"); //require 没有导入进来就终止脚本


	echo "龚彪的电话号码：".PHONE;
	echo "<br/>";
	echo "原来用过的手机品牌: {$str1}<br/>";
	echo "手机的型号： {$str2}<br/>";


	echo "<b>继承加载文件信息。。。</b>";

?>