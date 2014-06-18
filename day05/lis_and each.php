<?php
/*
@Describe: 键值对list
@Date:2014/06/11
*/
	header("content-type:text/html; charset=utf-8");

	$arr['user'] = "gongbiao";
	$arr['age'] = 21;

	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	echo "<hr>";

	//list 

	//list($key1, $key2) = $arr;


	$arr2 = each($arr);
	print_r($arr2);
	echo "<br/>";

	$arr3 = each($arr);
	print_r($arr3);

	//取完了为真还是假

	//取不到了为假
	var_dump(each($arr));




?>