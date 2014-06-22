<?php
$str = 'linux and php are lamp or linux  LINUX is very much!';
$ptn = '/\blinux\b\i';

preg_match_all($ptn, $str, $arr);

echo "<pre>";
print_r($arr);
echo "</pre>";
?>