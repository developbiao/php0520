<?php
/*
@Describe: array_map
@Date:2014/06/14
@Author:GongBiao
*/
header("content-type:text/html; charset=utf-8");

//使用更多数组

function show_Spanish($n, $m){
	return ("The number $n is called $m in Spanish");
}

function map_Spanish($n, $m){
	return (array($n => $m));
}

$a = array(1, 2, 3, 4, 5);
$b = array("uno", "dos", "tres", "cuatro", "cinco");

$c = array_map("show_Spanish", $a, $b);

echo "<pre>";
print_r($c);
echo "</pre>";

echo "<h3>一个做key, 一个做value的情况呢</h3>";
$d = array_map("map_Spanish", $a, $b);
echo "<pre>";
print_r($d);
echo "</pre>";






?>