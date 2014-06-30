<?php
/*
 *@Describe:php常用文件读写函数
 *@Author:GongBiao
 *@Date:2014/06/30
 */

header("Content-Type:text/html; charset=utf-8");

$filename = "test/b.txt";
$fs = fopen($filename, "a+");
//写数据
fwrite($fs, "moto");

//读取数据
rewind($fs);//把指针放到开头
$str = fread($fs, 1024);
echo $str;

//关闭流
fclose($fs);

?>
