<?php
/*
 *@Descrie:文件的读取
 *@Author:GongBiao
 *@Date:2014/06/29
 */

$filename = "test/b.txt";
$fs = fopen($filename, "r+");
fwrite($fs, "123");
rewind($fs); //把指针放到开头
$str = fread($fs, 10);
echo $str;

fclose($fs);

?>
