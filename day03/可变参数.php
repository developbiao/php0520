<?php
/*
@Describe:可变参数的函数调用
*/
	header("content-type:text/html; charset=utf-8");

	function sum(){
		//$var =  func_num_args();
		//echo "$var";
		return array_sum(func_get_args());
	}

	echo sum(1,3,5,7,9,2,-33,88);
?>