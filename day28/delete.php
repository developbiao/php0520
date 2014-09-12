<?php
header("Content-type:text/html; charset=utf-8");
//数据的删除操作
$conn = mysql_connect("192.168.176.128:3306", "root", "123456");
mysql_select_db("studentdb");
mysql_query("set names utf8");

//从表单收到的数据
$username = "大河";
$password = "88999";

//通过PHP进行delete操作
$sql = "delete from y1 where id=6";

//执行这条sql语句
var_dump(mysql_query($sql));

//释放资源
mysql_close($conn);
?>
