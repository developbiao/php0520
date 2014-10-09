<?php 
session_start();
include "../public/common/config.inc.php";

$rname=$_POST['rname'];
$addr=$_POST['addr'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$user_id=$_SESSION[user_id];

$sqlConn="insert into conn(rname,addr,tel,email,user_id) values('{$rname}','{$addr}','{$tel}','{$email}','{$user_id}')";
if(mysql_query($sqlConn)){ 
	echo "<script>location='index.php?action=show'</script>";
}
 ?>