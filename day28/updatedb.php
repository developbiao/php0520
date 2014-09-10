<?php
header("content-type:text/html; charset=utf-8");
$conn = mysql_connect("192.168.176.128:3306", "root", "123456");
mysql_select_db("studentdb");
mysql_query("set names utf8");

//通过php进行update操作:
$sql = "UPDATE y1 SET username = '路人甲' WHERE username='gongbiao'";
var_dump(mysql_query($sql));
mysql_close($conn);
?>
