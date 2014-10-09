<?php 
session_start();
include '../public/common/config.inc.php';

$username=$_POST['username'];
$password=md5($_POST['password']);

$sqlUser="select * from user where username='{$username}' and password='{$password}'";

$rstUser=mysql_query($sqlUser);

$rowUser=mysql_fetch_assoc($rstUser);

if(mysql_num_rows($rstUser)){
	$_SESSION['username']=$username;
	$_SESSION['userlogin']=1;
	$_SESSION['user_id']=$rowUser[id];
	
	echo "<script>location='{$_SESSION[url]}'</script>";
}else{
	$_SESSION['httpref']=$_SESSION[url];
	echo "<script>location='login.php'</script>";
}


 ?>