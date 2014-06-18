<?php
/*
@Describe: array数组的操作
@Date:2014/06/14
@Author:GongBiao
*/
header("content-type:text/html; charset=utf-8");


//对数组中所有的数加一

$arr = array("a" => 3, "b"=> 7 ,"c" => 9);

function add(&$arr){

	foreach($arr as $key => $value){
		$arr[$key] = ++$value;
	}

}

add($arr); 

echo "<pre>";
print_r($arr);
echo "</pre>";
?>