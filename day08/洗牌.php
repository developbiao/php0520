<?php
/*
@数组的有用函数
@Author:GongBiao
@Date:2014/06/16
*/

header("content-type:text/html; charset=utf-8");

$arr = array("aa", "bb", "cc", "dd", "ee", "ff");

shuffle($arr);


echo "<pre>";
print_r(array_slice($arr, 0, 3));
echo "</pre>";
?>
