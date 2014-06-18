<?php
/*
字符中的截取
*/

//字符串截取提取目录

header("Content-type:text/html; charset=utf-8");


$str = "http://localhost/day11/www/index.php";

$pos = strrpos($str, '/');  //最后一次出现的位置
//$pos1 = strpos($str, '/'); //开始出现的位置

echo  $pos .'<br/>';   //输出位置

echo substr($str, $pos+1 , 9);  //获取文件名
echo "<br/>";

echo substr($str, 0, $pos); //获取目录名

?> 
