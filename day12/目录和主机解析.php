<?php
header("Content-Type:text/html; charset=utf-8");

//解析目录
$str = "http://localhost/www/www/abc/www/index.html";

$arr  = pathinfo($str);

echo "<pre>";
print_r($arr);
echo "</pre>";

echo "<hr/>";

//解析url

$str = "https://www.google.com/web2/index.html";
$arr = parse_url($str);
echo "<pre>";
print_r($arr);
echo "</pre>";
//echo "<h3>{$arr['extension']} </h3>";
?>