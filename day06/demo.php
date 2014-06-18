<?php
/*
@Describe:$GLOBALS变量
@Author:Gongbiao
@Date:2014/06/12
*/

$user = "monitor";

function show(){

	//第一种方法
	global $user ; //global需要先定义
	$user = "biaoge";

	//第二种方法

	//$GLOBALS[user] = "root";

}

show();

echo "<pre>";
print_r($GLOBALS);
echo "</pre>";
?>