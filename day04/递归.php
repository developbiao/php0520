<?php
/*
@Describe: 函数的递归
*/

	header("content-type:text/html; charset=utf-8");

	//递归函数
	$num = 3;

	function sum($num){
		static $total;

		if($num >= 1){

			$total += $num;
			return sum(--$num);


		}else{

			return $total;

		}

	}

	echo sum(3);

?>