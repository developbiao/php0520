<?php
/*
@Describe:字符串解析练习
@Date:2014/06/19
*/

	header("content-type:text/html; charset=utf-8");

	$str = "first = value&arr[] = foo+bar&arr[]=baz";
	parse_str($str);

	echo "$first </br>";
	echo "$arr[0]</br>";
	echo "$arr[1]</br>";

	echo "</br>";

	echo "<h3> parse_str</h3>";
	parse_str($str, $output);
	echo $output['first'];  //value
	echo $output['arr'][0]; //foo bar
	echo $output['arr'][1];//baz
?>