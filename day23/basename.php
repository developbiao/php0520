<?php
/*
@Describe:php文件目录统计
@Author:GongBiao
@Date:2014/07/01
*/
header("content-type:text/html; charset=utf-8");

//解析目录路径
$path = "E:\php0520\day23\index.php";
$file = basename($path);
echo $file;
echo "<br/>";
$file = basename($path, ".php");   
echo $file;


?>
