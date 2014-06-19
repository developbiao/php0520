<?php
/*
@Author:GongBIao
@Describe:字符串拆分函数
@Date:2014/06/19
*/
header("Content-Type:text/html; charset=utf-8");
$str = "http://localhost/www/www/abc/www/index.php?id=10&name=jokey&sex=male";

//拆分参数


$arr = parse_url($str);
$query = $arr['query'];

 parse_str($query, $arr2);  //没有返回值的


echo "<pre>";
print_r($arr2);
echo "</pre>";

?>