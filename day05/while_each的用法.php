<?php
/*
@Describe: 键值对while eache
@Date:2014/06/11
*/
	header("content-type:text/html; charset=utf-8");

	$arr['user'] = "gongbiao";
	$arr['age'] = 21;
	$arr['sex'] = "manle";


	//while each

	//while($row = each($arr)){
	//	print_r($row);
	//	echo "<hr/>";
	//}

//	list($key1, $key2, $key3) = $arr;
//	echo $key1;
//	echo "<br/>";
//	echo $key2;
//	echo "<br/>";
//	echo $key3;


	//while list each 结合的使用

	//each 的返回值类型是一数组

	while(list($key, $value) = each($arr)){
		echo "<h3>{$key} : {$value} </h3>";
	}



?>
