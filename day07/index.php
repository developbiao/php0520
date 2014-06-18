<?php
/*
多数组排序
*/

$arr = array("aaa", "bbbbbbbbbb", "cc", "ddddddd");  // 3, 10, 2, 7

//需求:
//1、按标题长度排序
//2标题长度变成标题字符串的key

foreach($arr as $val){
	$lens[] = strlen($val);
}


array_multisort($lens, SORT_ASC, $arr);

sort($lens);

$arr2 = array_combine($lens, $arr);


echo "<pre>";
print_r($arr);
echo "</pre>";

echo "<hr/>";
echo "<pre>";
print_r($arr2);
echo "</pre>";




?>