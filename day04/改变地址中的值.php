<?php
	header("Content-type:text/html; charset=utf-8");

	$arry = array(33, 22, 77);

	echo "改变之前的值是:<br/>";
	print_r($arry);


	function change_value(&$arr){

		$arr[0] = 11;
		$arr[1] = 22;
		$arr[2] = 33;

	}

	change_value($arry);

	echo "<br/>";
	echo "改变之后的值是:<br/>";
	print_r($arry);

?>