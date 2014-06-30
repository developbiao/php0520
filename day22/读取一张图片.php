<?php
/*
 *@Describe:php常用文件读写函数
 *@Author:GongBiao
 *@Date:2014/06/30
 */

header("Content-Type:text/html; charset=utf-8");
//读取一张图片

$filename = "test/0014.jpg";

header("content-type:image/jpeg");
readfile($filename);



?>
