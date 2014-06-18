<?php
/*
@Describe:统计数组中值出现的次数
@Author:GongBiao
@Date:2014/06/14

*/

	header("content-type:text/html; charset=utf-8");

	$socres = array(70, 80, 90, 90, 90, 88, 70, 33, 21,80);

	$results = array_count_values($socres);


	echo "<pre>";
	print_r($results);
	echo "</pre>";
?>