<?php
	header("Content-type:text/html; charset=utf-8");

	$num = 10;
	echo "$num";
	echo "<br/>";
	function  show(){
		//global $var = 30;
		//$var ++;

		global $num;
		$num = 35;

	}

	show();
	echo "$num";
	echo "<br/>";
?>