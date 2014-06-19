<?php
/*
@Author:GongBIao
@Describe:正则表达式函数的的使用
@Date:2014/06/19
*/
header("Content-Type:text/html; charset=utf-8");

$sub = "http://www.google.com/web/phpinfo.php";  //需要匹配的主机

//$ptn = '/.*/';

//$ptn = '/\w*\.\w*\.\w*/';

$ptn = '/(\w*\.)?\w*\.\w*/';  //第一个可以出现一次或0次

preg_match($ptn, $sub, $mats);

echo "<pre>";
print_r($mats);
echo "</pre>";

echo "<hr/>";

echo "<pre>";
print_r(pathinfo($sub));
echo "</pre>";


?>