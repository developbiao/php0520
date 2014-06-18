<?php
/*
@数组的有用函数
@Author:GongBiao
@Date:2014/06/16
*/

$a = array("aa", "bb", "cc");
//array_shift();
$b = array_push($a, "dd"); //b 为int 4

$c = array_unshift($a, "jj");


echo "<pre>";
print_r($a);
echo "</pre>";
?>