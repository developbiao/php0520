<?php
header("content-type:text/html; charset=utf-8");
echo "<h3>php is ok !</h3>";
//通过PHP连接数据库:
$conn = mysql_connect('192.168.176.128:3306', 'root', '123456');

//选择数据库
mysql_select_db("studentdb");

//设置客户端和连接字符集
mysql_query("set names utf8");

//从表单收到的数据
$username = "晴玲";
$password = "123456";

//通过PHP进行insert操作
$sql = "INSERT INTO y1(username, password) VALUES('{$username}', '{$password}')"; 

//执行这条sql语句
var_dump(mysql_query($sql));

//释放连接资源
mysql_close($conn);

?>
