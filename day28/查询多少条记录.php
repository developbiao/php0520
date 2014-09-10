<?php
/*
 * @Describe:php查询插入数据的id
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
$num_rows = mysql_num_rows($result);
echo "上一次查询到有{$num_rows}条记录";


//释放连接资源
mysql_close($conn);
?>
