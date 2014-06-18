<?php
/*
@Describe:数组的定义
*/

	header("content-type:text/html; charset=utf-8");

	//数组的定义和取值

	$arry = array("user"=>"gongbiao", "age"=>21, "class"=>"1234", 32=>52);

	echo "<h3>name:{$arry['user']}</h3>";
	echo "<h3>age:{$arry['age']} </h3>";
	echo "<h3>class: {$arry['class']}</h3>";
	echo "<h3> id: {$arry[32]}</h3>";
?>