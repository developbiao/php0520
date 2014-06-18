<?php
/*
字符中的截取
*/

//字符串截取提取目录

header("Content-type:text/html; charset=utf-8");


$str = "http://localhost/day11/www/index.php";

$var =  strrchr($str, "index"); 

echo strstr($str, "http:");
echo "<br/>";

if ($var != null){
	echo "找到了！";
}




?> 
