<?php
/*
@Describe:‘@’运算符
@Author:Gongbiao
@Date:2014/06/07
*/

header("content-type:text/html; charset=utf-8");

$conn = @mysql_connect("localhost", "root", "123456");
echo "<h3>hahahahaah </h3>";
echo "<h3>hahahahaah </h3>";
echo "<h3>hahahahaah </h3>";
echo "<h3>hahahahaah </h3>";
echo "<h3>hahahahaah </h3>";

if ($conn){
	echo "<h3>数据库连接成功! </h3>";
}else{
	echo "<h3>连接失败!</h3>";
}

?>