<?php
/*
@Describe: array_sort
@Date:2014/06/14
@Author:GongBiao
*/
header("content-type:text/html; charset=utf-8");

//数组的排序

$array1 = array('user1' => 90, 'user2' => 32, "user3" => 77, "user4" => 78, "user5" => 49);
arsort($array1);

print_r($array1);




?>