<?php
/*
@Describe:检查一个key是否在数组中
*/

$arr = array("name" => "gongbiao",  "age" => "21", "sex" => "manle", "class" => "1234");

var_dump(array_key_exists("class", $arr));


?>