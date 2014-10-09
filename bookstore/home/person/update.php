<?php 
session_start();
include "../public/common/config.inc.php";

$rname=$_POST['rname'];
$addr=$_POST['addr'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$id=$_POST[id];

$sqlConn="update conn set rname='{$rname}',addr='{$addr}',tel='{$tel}',email='{$email}' where id={$id}";
if(mysql_query($sqlConn)){
	echo "<script>location='index.php?action=show'</script>";
}
 ?>