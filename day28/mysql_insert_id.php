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
$sql = "INSERT INTO y1(username, password) VALUES('小猫咪', 1111111)";

//执行这条sql语句

if(mysql_query($sql)){
	echo "你插入的数据的ID:".mysql_insert_id();
}



//释放连接资源
mysql_close($conn);
?>
