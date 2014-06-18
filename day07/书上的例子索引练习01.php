<?php
/*
@Describe:书上的例子

*/

$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array));

$array = array("color" => array("blue", "red", "green"),
		"size" => array("smal", "medium", "large"));

echo "<hr/>";

echo "<pre>";
print_r($array);
echo "</pre>";

?>