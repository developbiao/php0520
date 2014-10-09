<?php 
include '../public/common/acl.inc.php';

header('content-type:text/html;charset=utf-8');
include '../public/common/config.inc.php';

$id=$_POST['id'];
$username=$_POST['username'];
$password=md5($_POST['password']);

$sqlUser="update user set username='{$username}',password='{$password}' where id={$id}";

if(mysql_query($sqlUser)){
	echo "<script>alert('修改成功')</script>";
	echo "<script>location='index.php'</script>";
}
 ?>