<?php
/*
@Describe:翻转一个数组
*/

$arr = array("name" => "gongbiao",  "age" => "21", "sex" => "manle", "class" => "1234");

echo "<h3>start array: </h3>";
echo "<pre>";
print_r($arr);
echo "</pre>";

//翻转数组函数
 $arr = array_reverse($arr);

echo "<h3>reverser array: </h3>";
echo "<pre>";
print_r($arr);
echo "</pre>";



?>