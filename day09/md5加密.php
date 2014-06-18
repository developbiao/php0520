<?php
/*
@Describe:有用的字符串的处理
*/
	header("content-type:text/html; charset=utf-8");

	//md5码的用法
	$str = "user1";
	echo strlen(md5($str));

?>