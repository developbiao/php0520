<?php
/*
@Describe:变量函数
@Date:2014/06/10
@Author:GongBaio
*/
	header("content-type:text/html; charset=utf-8");

	function fun($i, $j){

		return $i + $j;

	}

	$a = "fun";
	$b = "fun";
	$c =  $a(3, 9);
	echo $c;
	echo "</br>";
	echo $b(7,8);
?>