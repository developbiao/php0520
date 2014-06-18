<?php
/*
@Describe:回调函数
@Author:GongBiao
@Date:2014/06/10
*/
	header("Content-type:text/html; charset=utf-8");

	function dev($a, $b){
		return $a - $b;
	}

	function sum($a, $b){
		return $a + $b;
	}

	function method($a, $b, $f){

		echo $f($a, $b);


	}

	//method(3, 7, "sum");
	method(88, 33, "dev");

?>