<?php 
session_start();
include './public/common/config.inc.php';

$user_id=$_SESSION['user_id'];
$shop_id=$_POST['shop_id'];
$content=$_POST['content'];
$time=time();

$sqlCommit="insert into commit(user_id,shop_id,content,time) values('{$user_id}','{$shop_id}','{$content}','{$time}')";

if(mysql_query($sqlCommit)){
	echo "<script>location='{$_SERVER[HTTP_REFERER]}'</script>";
}
 ?>