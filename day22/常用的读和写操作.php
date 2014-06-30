<?php
/*
 *@Describe:php常用文件读写函数
 *@Author:GongBiao
 *@Date:2014/06/30
 */

header("Content-Type:text/html; charset=utf-8");

//写入文件

$filename = "test/b.txt";

file_put_contents($filename, "123");

readfile($filename);



?>
