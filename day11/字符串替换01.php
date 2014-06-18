<?php
header("Content-type:text/html; charset=utf-8");

//字符中的替换

//$str = "php is very much";

//$str = str_replace("php", "linux", $str);

//echo $str;

$str = "http://localhost/test/www/index.php";

//echo str_replace("test", "phpwind", $str);

$str = "http://localhost/www/www/abc/www/index.php";
$count = 1;


//examp2
echo str_replace("www", "phpwind", $str, $count);  //count replace count
echo "<h3>{$count}</h3>";


//example3

$src = array("http", "localhost", "www");   //按照数组替换

echo str_replace($src, "thinkphp", $str);



?> 
