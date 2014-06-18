<?php
/*
	取出index索引
*/

$arr = array("name" => "gongbiao",  "age" => "21", "sex" => "manle", "class" => "1234");

foreach($arr as $key => $value){
	$keys[] = $key;
}

echo "<pre>";
print_r($keys);
echo "</pre>";

?>