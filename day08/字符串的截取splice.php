<?php
/*
@Describe:数组的分割
@Author:GongBiao
@Date:2014/06/16
*/

$arr =array("aa", "bb", "cc", "dd", "ee", "ee");

$arr2 = array_splice($arr, 0, 3, array("ff"));

echo "<pre>";
print_r($arr2);
echo "</pre>";


echo "<pre>";
print_r($arr);
echo "</pre>";


?>