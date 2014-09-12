<?php
header("content-type:text/html; charset=utf-8");
//连接数据库
$conn = mysql_connect("192.168.176.128:3306", "root", "123456");

//选择数据库
mysql_select_db("studentdb");

//设置客户端和连接字符集
mysql_query("set names utf8");

//从表单收到的数据
$username = "user1";
$password = "123456";

//得到表总行数
$sql = "INSERT INTO y1(username, password) VALUES('{$username}', '{$password}')";

if(mysql_query($sql)){
	echo "<h2>本次插入的是:".mysql_insert_id()."</h2>";
}

//释放连接资源
mysql_close($conn);
?>
