<?php
/*
 *@Describe:php常用文件读写函数
 *@Author:GongBiao
 *@Date:2014/06/30
 */

header("Content-Type:text/html; charset=utf-8");

$filename = "test/b.txt";
$fs = fopen($filename, "a+");

//写入数据
fwrite($fs, "<h3>abc</h3>");

//读取数
rewind($fs);
$buf = 1024;
$str = fread($fs, $buf) ;
echo "$str";

//close stream

fclose($fs);



?>
