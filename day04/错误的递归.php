<?php
/*
@Describe: 函数的递归
*/

//一个死递归的练习

	header("content-type:text/html; charset=utf-8");

	function show_text(){

		static $count = 0;

		$count ++;
		echo "count is : {$count}</br>";
		return show_text();
	}

	show_text();

?>