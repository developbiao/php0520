<?php
/*
@Describe:数组的merge
@Author:GongBiao
@Date:2014/06/16
*/

$a = array("aa", "bb", "cc", "cc");
$b = array("dd", "ee", "ff", "cc");

//$c = array_merge($a, $b);
//$c = array_combine($a, $b);

//$c = array_intersect($a, $b); 交集

$c = array_diff($a, $b);


echo "<pre>";
print_r($c);
echo "</pre>";


?>