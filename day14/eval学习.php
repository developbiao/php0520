<?php
/*
$str = "123 php";
$ptn = '/\d+\s(\w+)/e';
//$rep = 'strtoupper(\\1)';
$rep = 'strtoupper($1)';

$str2 =preg_replace($ptn, $rep, $str);

echo "<pre>";
print_r($str2);
echo "</pre>";

*/

//eval 学习


$string = 'cup';
$name = 'coffee';
$str = 'This is a $string with my $name in it';

echo $str . "<br/>";
eval("\$str = \" $str\";");   //把$和又引号转义了

echo $str. "<br/>";



?>