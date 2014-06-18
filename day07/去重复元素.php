<?php
/*
@Describe: array_unique
@Author:GongBiao
@Date:2014/06/14

*/

header("content-type:text/html; charset=utf-8");
$socres = array(70, 80, 90, 90, 90, 88, 70, 33, 21,80,33, 35,35,35,35,35);
$socres = array_unique($socres);


print_r($socres);
?>