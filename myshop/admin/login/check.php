<?php
/*
@Descirbe:检查页面
*/
session_start();
header("Content-Type:text/html; charset=utf-8");
include '../../public/common/dbconfig.inc.php';
$username = $_POST['username'];
$password = md5($_POST['password']);

$sqlAdmin = "SELECT * FROM user WHERE username='{$username}' AND password='{$password}'";
// echo $sqlAdmin;
// exit;

$rstAdmin = mysql_query($sqlAdmin);
if(mysql_affected_rows()){
	$rowAdmin = mysql_fetch_assoc($rstAdmin);
	$_SESSION['adminname'] = $username;
	if($rowAdmin['admin']){
		$_SESSION['adminlogin'] = 1;
	}else{
		$_SESSION['adminlogin'] = 0;
	}
	echo "<script>location='../index.php'</script>";
}else{
	echo "<script>alert('用户名或密码不正确!');</script>";
	echo "<script>location='login.php'</script>";
}
?>