<?php
	header("Content-type:text/html; charset=utf-8");

	$num = 10;

	function fun(&$i){
		$i ++;
	}

	fun($num);
	echo $num;
	echo "<br/>";
	fun($num);
	fun($num);
	fun($num);
	echo "被调用了的函数改变了值";
	echo $num;



?>