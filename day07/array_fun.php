<?php
/*
自己写一个函数来实现统计
*/

	function array_count($arr){

		foreach($arr as $value){
			$result[$value]++;
		}

		return $result;

	}
?>