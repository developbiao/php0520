<?php
/*
@Descreption:php 连接mysql demo
@Date:2014/06/07
@Author:GongBiao
*/
header("content-type:text/html; charset=utf-8");

$conn = mysql_connect("localhost", "root", "123456");

mysql_select_db("test");

mysql_query("select * from user");

$rst = mysql_query($sql);

while ($row = mysql _fetch_assoc($rst)){
	echo "<h1>ID:{$row['id']}</h1>"
	echo "<h1>Name:{$row['name']} </h1>":
}


?>