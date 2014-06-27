<?php
/*
判断是注册码页面
*/
session_start();   //开启session
header("content-type:text/html; charset:utf-8");
//echo $_SESSION['vstr'];
//echo "<pre>";
//print_r($_SESSION);  //拿到session
//echo "</pre>";

$code = strtolower ($_GET['vcode']); //不知道为什么POST用不了   23:42
$vstr = strtolower($_SESSION['vstr']);

if($code == $vstr){
	echo "<script>location='http://www.so.com'</script>";
}else{
	echo "<script>alert('auto code is error, plese replace agin!');</script>";
	echo "<script>location='index.php'</script>";
}

?>