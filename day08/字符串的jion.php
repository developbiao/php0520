<?php
/*
@Describe:数组拆分
@Author:GongBiao
@Date:2014/06/16
*/

$str = "php, js, html, css, div";

$arr = explode(",", $str);  //explode

$arr2 =array_reverse($arr);  

$str2 = implode("+",$arr);  //implode

echo "<pre>";
print_r($str2);
echo "</pre>";
?>