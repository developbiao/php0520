<?php
/*
@Author:GongBIao
@Describe:字符串拆分函数自己写一个GET原理
@Date:2014/06/19
*/
header("Content-Type:text/html; charset=utf-8");
$str = "http://localhost/www/www/abc/www/index.php?id=10&name=jokey&sex=male&age=21";


//手动实现GET数组原理

$arr = parse_url($str);

$arr2 = preg_split('/&|=/', $arr['query']);

//echo count($arr2);
echo "<pre>";
print_r($arr2);
echo "</pre>";

echo "<hr/>";




for ($i = 0; $i < count($arr2); $i++){
	$arr3[$arr2[$i]] = $arr2[++$i];
}

echo "<pre>";
print_r($arr3);
echo "</pre>";

?>