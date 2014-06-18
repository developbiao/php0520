<?php
/*
@Describe:Mysql 表中就是数组
@Author:GongBiao
@Date:2014/06/11
*/
	header("content-type:text/html; charset=utf-8");

	mysql_connect("localhost", "root", "123456");
	mysql_select_db("test");
	mysql_query("set names utf-8");  //
	$sql = "select * from user";
	$result = mysql_query($sql);
	$row1 = mysql_fetch_assoc($result);

	echo "<pre>";
	print_r($result);
	echo "</pre>";

	echo "is ok <br/>";

?>