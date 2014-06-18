<?php
/*
@Describe:有用的字符串的处理
*/
	header("content-type:text/html; charset=utf-8");

	//数字格式化

	$money = "13423423231923149231";

	echo "<h3>龚先生你的资产为：".number_format($money)."欧元</h3>";
	echo "<h3>格式化2</h3>";
	echo "<h3>龚先生你的资产为：".number_format($money,2, ',', ' ')."欧元</h3>";
	//$money 保留小数位，分割符，千分位数分割
	echo "<h3>龚先生你的资产为：".number_format($money,3, '.', ' >')."欧元</h3>";

?>