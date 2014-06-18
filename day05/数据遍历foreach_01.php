<?php
/*
@Describe:foreache 键值对
@Date:2014/06/11
*/
	header("content-type:text/html; charset=utf-8");

	$arr['name'] = "GongBiao";
	$arr['sex'] = "manle";
	$arr['age'] = 21;
	$arr['class'] = "1234";

	echo "<pre>";
	print_r ($arr);
	echo "</pre>";

	echo "<hr/>";

	//foreache demo


	foreach($arr as $key => $value){

		if ($flag++ % 2){  //falg ++ 先运算再赋值

		echo "<h3 style='color:gray'>{$key}={$value}</h3>";
	}else{

		echo "<h3 style='color:#00ff00'>{$key}={$value}</h3>";
	}

	}

?>