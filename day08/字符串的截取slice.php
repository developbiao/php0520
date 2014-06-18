<?php
/*
@Describe:数组的分割
@Author:GongBiao
@Date:2014/06/16
*/

$arr =array("aa", "bb", "cc", "dd", "ee");

$arr2 = array_slice($arr, -2, 3);  //字符串的截取

echo "<pre>";
print_r($arr2);
echo "</pre>";


?>