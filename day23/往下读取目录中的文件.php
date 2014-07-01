<?php
/*
@Describe:php文件目录统计
@Author:GongBiao
@Date:2014/07/01
*/
header("content-type:text/html; charset=utf-8");

echo "<h3>递归文件的目录</h3>";


$dirname = "test";

$ds = opendir($dirname);  //往下读取目录中的文件
echo readdir($ds);
echo "<br/>";
echo readdir($ds);
echo "<br/>";
echo readdir($ds);
echo "<br/>";
echo readdir($ds);





?>
