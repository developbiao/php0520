<?php
/*
@Describe:统计数组中值出现的次数
@Author:GongBiao
@Date:2014/06/14

*/

	header("content-type:text/html; charset=utf-8");
	include("./array_fun.php");

	$socres = array(70, 80, 90, 90, 90, 88, 70, 33, 21,80,33, 35,35,35,35,35);

	//$results = array_count_values($socres);
	$results = array_count($socres);


	echo "<pre>";
	print_r($results);
	echo "</pre>";
?>