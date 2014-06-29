<?php
/*
@Describe:php文件操作
@Date:2014/06/29
@Author:GongBiao
*/
//文件的打开

//生成一个文件
$filename = "hello.txt";
var_dump(fopen($filename, "w"));

?>
