<?php
/*
@数组的有用函数
@Author:GongBiao
@Date:2014/06/16
*/

header("content-type:text/html; charset=utf-8");

//随机生成验证码

$a = range(0, 9);
$b = range(a,z);
$c = range(A,Z);
$d = array_merge($a, $b, $c);
shuffle($d);
$e = array_slice($d, 0, 4);
$str = implode("", $e);
echo "<h3> 验证码是: {$str}</h3>"


?>

