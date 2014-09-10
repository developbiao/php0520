<?php
//页面字符集
header("content-type:text/html; charset=utf-8");

//通过PHP连接mysql数据库
$conn = @mysql_connect("192.168.176.128:3306", "root", "123456");

//选择数据库
mysql_select_db("studentdb");

//设置客户端字符集
mysql_query("set names utf8");

//准备sql 语句
$sql = "DELETE FROM cls WHERE id={$_GET['id']}";

$result = mysql_query($sql);
//执行sql
if($result){
	echo "<script>alert('数据已删除!');</script>";
	echo "<script>location='index.php?page={$_GET['page']}'</script>";
}else{
	echo "<script>alert('数据删除失败!');</script>";
	echo "<script>location='index.php?page={$_GET['page']}'</script>";
}



?>
