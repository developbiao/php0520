<?php
/*
@Describe:回调函数的真假练习
@Date:2014/06/14
@Author:GongBiao
*/
header("content-type:text/html; charset=utf-8");

$entry = array(
		0 => 'foo',
		1 => false,
		2 => -1,
		3 => null,
		4 => ''
	);

//0是真1是假
echo "<pre>";
print_r($entry = array_filter($entry));
echo "</pre>";


?>