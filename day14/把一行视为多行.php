<?php
$str = "LINUX and php are lamp \nlinux is very much!";
$ptn = '/^linux/im';  //把一行视为多行

preg_match_all($ptn, $str, $arr);

echo "<pre>";
print_r($arr);
echo "</pre>";

?>