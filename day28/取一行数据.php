<?php
/*
 * @Describe:php查询数据库
 * @Date:2014/08/21
 * @Author:GongBiao
 *
 */
header("content-type:text/html; charset=utf-8");
$conn = mysql_connect("192.168.176.128:3306", "root", "123456");
mysql_select_db("studentdb");
mysql_query("set names utf8");

//通过php进行select操作:
$sql = "SELECT * FROM y1";

//执行这条sql语句

$result = mysql_query($sql);

//从结果中拿一行出来
$row = mysql_fetch_assoc($result);

//打印出$row一行
echo "<pre>";
print_r($row);
echo "</pre>";

//释放连接资源
mysql_close($conn);
?>
