<?php
$str = "LINUX and php are lamp \nlinux is very much!";

$ptn = '/.*/s';  //."."不能匹配换行符加入s就能了

preg_match_all($ptn, $str, $arr);

echo "<pre>";
print_r($arr);
echo "</pre>";

?>