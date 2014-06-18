<?php
/*
@Describe:数组的练习隔行变色
@Author:Gongbiao
@Date:2014/06/11
*/
header("content-Type:text/html; charset=utf-8");

$arr[] = "user1";
$arr[] = "user2";
$arr[] = "user3";
$arr[] = "user4";
$arr[] = "user5";

echo "<pre>";
print_r($arr);
echo "</pre>";

echo "<hr/>";

for ($i = 0; $i < 5; $i++){
	if ($i %2){
	echo "<h3 style='color:red'>第".($i+1)."个人的姓名是{$arr[$i]}</h3>"; //有运算的最好加起来
}else{
	echo "<h3 style='color:blue'>第".($i + 1)."个人的姓名是{$arr[$i]} </h3>";
}
}
?>