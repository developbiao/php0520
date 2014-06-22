<?php

$str = "<b>LINUX</b> and php are lamp or <b>linux</b> is very much!";

$ptn = '/<b>.*<\/b>/U';   //大U贪婪模式更细的匹配

preg_match_all($ptn, $str, $arr);

echo "<pre>";
print_r($arr);
echo "</pre>";

?>