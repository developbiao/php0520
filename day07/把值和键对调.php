<?php
/*
@Describe: 把值和键对调
*/

$arr = array("status" => "open", "local" => "China", "COMI" => "enable");

$arr = array_flip($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

?>