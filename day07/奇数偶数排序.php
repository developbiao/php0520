<?php
/*
@Describe:filter函数的过虑 
@Author:GongBiao
@Date:2014/06/14

*/

header("content-type:text/html; charset=utf-8");

function odd($var){
	return ($var % 2 == 1);
}

function even($var){
	return ($var % 2 == 0);
}

$array1 = array("a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5);
$array2 = array(6, 7, 8, 9, 10, 11, 12);

echo "<h3>对奇数排序:</h3>";
echo "<pre>";
print_r(array_filter($array1, "odd"));
echo "</pre>";


echo "<h3>对偶数排序:</h3>";
echo "<pre>";
print_r(array_filter($array2, "even"));
echo "</pre>";
?>