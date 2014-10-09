<?php 
include '../public/common/acl.inc.php';

header('content-type:text/html;charset=utf-8');

include "../public/common/config.inc.php";

$username=$_POST['username'];
$password=md5($_POST['password']);
$time=time();

$sqlUser="insert into user(username,password,time) values('{$username}','{$password}',{$time})";
if(mysql_query($sqlUser)){
	echo "<script>alert('添加成功')</script>";
	echo "<script>location='index.php'</script>";
}
 ?>