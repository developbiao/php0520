<?php
/*
@Describe:php文件操作
@Date:2014/06/29
@Author:GongBiao
*/
//$file = "a.txt";
$file = "test";
//var_dump(is_file($file)); //判断是不是文件
//echo filetype($file);
var_dump(file_exists("$file"));

?>