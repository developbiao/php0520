<?php
header("content-type:text/html; charset=utf-8");
echo "数据添加:";
//1、php连接数据库
$conn = mysql_connect("192.168.176.128:3306", "root", "123456");

//2、选择数据库
mysql_select_db("studentdb");

//3、设置数据客户端字符集
mysql_query("set names utf8");

//4、从表单拿到的数据
$username = "姜姐";
$password = "dbcj138";

//5、准备sql语句
$sql = "INSERT INTO y1(username, password) VALUES('{$username}', '{$password}')";

//6、执行sql语句
var_dump(mysql_query($sql));

//7、关闭资源
mysql_close($conn);

?>
