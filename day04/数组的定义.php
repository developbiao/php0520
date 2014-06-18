<?php
/*
@Describe:数组的定义
*/

//数组的定义$arr = arry(1,2,3) ; //索引数组，下标全是数字
//$arr = arrya("name" => "user1", "age" => 30, "height"=>90); 关联数组

	header("content-type:text/html; charset=utf-8");

	$arry = array("name"=>1, 2, "age"=>3, 4, 100=>5, 6, 7);

	echo "<pre>";

	print_r($arry);

	echo "</pre>";

	echo "</br>";

	echo "<b> {$arry[100]}</b>";
?>