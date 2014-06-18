<?php
/*
@Descrition:sina intervie
@Date:2014/06/07
@Author:GongBiao
*/
header("content-type:text/html; charset=utf-8");

$a = 2;
$b = 4;
if ($c = $a && $b = 4){
	echo "11111111111111111111";
	echo "<br/>";
}else{
	echo "000000000000000000000";
	echo "<br/>";
}
echo $a;
echo "<br/>";
echo $b;
echo "<br/>";
var_dump($c);
?>