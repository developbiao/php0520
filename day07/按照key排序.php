<?php
/*
@Describe: array数组的操作
@Date:2014/06/14
@Author:GongBiao
*/
header("content-type:text/html; charset=utf-8");


//按照数据的key排序

$arr = array("a" => 3, "b"=> 7 ,"c" => 9);

krsort($arr);

print_r($arr);



?>