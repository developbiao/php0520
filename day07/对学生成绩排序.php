<?php
/*
@Describe:对学生成绩排序
@Date:2014/06/14
@Author:GongBiao
*/
header("content-type:text/html; charset=utf-8");

$socres = array("龚彪" => 87, "徐磊" => 37, "廖继强" => 59, "谷宏杰" => 100, "李骏" => 97);

function jige($value){

	return ($value < 60);

}

$data_F = array_filter($socres, "jige");

echo "<h3>下面是不及格的同学:</h3>";

while(list($key, $value) = each($data_F)){
	echo "<h5>姓名：{$key}   期未成绩: {$value}</h5>";
}

?>