<?php
/*
@Describe: array_map
@Date:2014/06/14
@Author:GongBiao
*/
header("content-type:text/html; charset=utf-8");

function cube($n){
	return ($n * $n * $n);
}

$array1 = array(1, 2, 3, 4, 5);
$array1 = array_map("cube", $array1);

print_r($array1);


?>