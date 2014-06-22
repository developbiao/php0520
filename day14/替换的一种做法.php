<?php

$str = "<b>LINUX</b> and php are <b>lamp</b> or <b>linux</b> is very much!";

$ptn = '/linux/i';
$rep = 'mysql';


$str2 = preg_replace($ptn, $rep, $str);

echo "<pre>";
print_r($str2);
echo "</pre>";

?>