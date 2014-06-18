<?php
/*
字符中的比较
*/
//$a = "user7";
//$b = "user2";
//var_dump(strcmp($a, $b));

$a = "a";
$b = "A";

//var_dump(strcmp($a, $b));
var_dump(strcasecmp($a, $b));   //case
echo "<h3>".ord($b)."</h3>";   //print nubmer
?>