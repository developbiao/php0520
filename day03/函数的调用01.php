<?php
/*
函数的调用返回值
*/
	header("content-type:text/html; charset=utf-8");

	function sum($a, $b){

		echo $a + $b;

	}

	//echo "<h3>".sum(7, 8)."</h3>";
	echo "1 + 2".sum(1, 2);

?>