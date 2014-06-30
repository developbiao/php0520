<?php
/*
 *@Describe:php常用文件读写函数
 *@Author:GongBiao
 *@Date:2014/06/30
 */

header("Content-Type:text/html; charset=utf-8");
$filename = "test/b.txt";
$arr = file($filename);

var_dump($arr);


?>
