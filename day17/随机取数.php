<?php
/*
php数学函数学习
*/
//echo round(4.3); //四舍五入

/*
需求：随机从一个数组中取一个值
*/

$arr = array("a", "b", "c", "d", "e");

$rkey = mt_rand(0, count($arr) - 1);

echo $arr[$rkey];

?>