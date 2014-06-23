<?php
/*
@Describe:日期函数的学习
@Author:GongBiao
@Date:2014/06/23
*/
	header("Content-Type:text/html; charset=utf-8");

	//日期函数

	$nextWeek = time() + (7 * 24 * 60 * 60);
	// 7days: 24 hours; 60 mins; 60secs
	echo "<h3>Now:" . date('Y-m-d'). " </h3>";

	echo "<h3>Next Week:". date('Y-m-d', $nextWeek) ."</h3>";

	// or using strtotime();

	echo "<h3>Next Week:". date('Y-m-d', strtotime('+2 week')) ."</h3>";


?>