<?php
/*
@数组的有用函数
@Author:GongBiao
@Date:2014/06/16
*/

header("content-type:text/html; charset=utf-8");

$arr = array("aa", "bb", "cc", "dd", "ee");

$key = array_rand($arr);

echo "数组的随机";
echo "<hr/>";

for($i = 0; $i < 3; $i++){
	$arr2[] = $arr[array_rand($arr)];
}

echo "<pre>";
print_r($arr2);
echo "</pre>";
?>
