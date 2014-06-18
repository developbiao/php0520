<?php
	header("Content-type:text/html; charset=utf-8");

	static $var = 13;
	$var ++;

	function  sum(){
		$var ++;
	}

	sum();
	echo "sum value is {$var}";
	sum();
	echo "<br/>";
	echo "sum value is {$var}";




?>