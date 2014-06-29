<?php
/*
 *@Descrie:文件的读取
 *@Author:GongBiao
 *@Date:2014/06/29
 */

$filename = "test/b.txt";
$fs = fopen($filename, "r"); //以读的模式打开
$str = fread($fs, filesize($filename));
echo $str;
fclose($fs);  //关闭资源
?>
