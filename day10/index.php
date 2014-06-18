<?php
/*
@Describe:连接数据库
@Author:GongBiao
@Date:2014/06/19 
*/

header("content-type:text/html; charset:utf-8")
$title = $_GET['title'];
$content = $_GET['content'];

$conn = mysql_connect("localhost", "root", "123456");
mysql_select_db("test");
mysql_query("set names utf8");
$sql = "insert into mess(title, connet) values('{$title}', {$content})"

if (mysql_query($sql)){
	echo "Insert is ok !";
}else{
	echo "insert is faild !";
}
?>