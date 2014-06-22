<?php

$str = "<b>LINUX</b> and php are <b>lamp</b> or <b>linux</b> is very much!";

//$ptn = '/<b>.*<\/b>/U';

$ptn = '/<b>[^<]*<\/b>/';

preg_match_all($ptn, $str, $arr);

echo "<pre>";
print_r($arr);
echo "</pre>";

?>