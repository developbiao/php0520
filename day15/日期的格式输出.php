<?php
/*
@Describe:日期函数的学习
@Author:GongBiao
@Date:2014/06/23
*/
	header("Content-Type:text/html; charset=utf-8");

	//设定默认的时区
	date_default_timezone_set('GMT');

	//输出类似：Monday
	echo date("l");
	echo "<br/>";

	//输出:Monday 15th of August 2014 06 23 12:52:46 PM

	echo date('l dS \of F Y h:i:s A');
	echo "<br/>";

	//输出:July 1, 2000 is on Saturday
	echo "July 1, 2000, is on a ". date("l", mktime(0, 0, 0, 7, 1, 2000));
	//输出 类似:Mon, 15 Aug 2005 15:12:46 UTC

	echo "<br/>";

	echo date(DATE_RFC822);

	//输出类似:2000-0-01T00:00:00+00:00

	echo "<br/>";
	echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));



?>