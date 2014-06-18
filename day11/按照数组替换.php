<?php
header("Content-type:text/html; charset=utf-8");

//字符中的替换

//按照数组替换

$str = "http://localhost/www/www/abc/www/index.php";
$src = array("http", "localhost", "www", "abc");
$rep = array("ssh", "sum90", "web", "web3");

echo "<h3>" . str_replace($src, $rep, $str)."</h3>";

?> 
