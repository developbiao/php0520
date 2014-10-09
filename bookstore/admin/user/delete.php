<?php 
include '../public/common/acl.inc.php';

header('content-type:text/html;charset=utf-8');

include '../public/common/config.inc.php';
$id=$_GET['id'];

$sqlUser="delete from user where id={$id}";
if(mysql_query($sqlUser)){
	echo "<script>alert('删除成功')</script>";
	echo "<script>location='index.php'</script>";
}
 ?>