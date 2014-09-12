<?php
/*
 * @Describe:php查询数据库表结构的获取
 * @Date:2014/08/21
 * @Author:GongBiao
 *
 */
header("content-type:text/html; charset=utf-8");
$conn = mysql_connect("192.168.176.128:3306", "root", "123456");
mysql_select_db("studentdb");
mysql_query("set names utf8");

//通过php进行select操作:
//$sql = "SELECT id, username, password FROM y1 ORDER BY id";
$sql = "DESC y1";

//执行这条sql语句

$result = mysql_query($sql);

//从结果中拿一行出来
while($row = mysql_fetch_assoc($result)){
	//打印出$row一行
	echo "<pre>";
		print_r($row['Field']);
		//print_r($f->name); //取到table 的field name
	echo "</pre>";
}

//释放结果集
mysql_free_result($result);


//释放连接资源
mysql_close($conn);
?>
