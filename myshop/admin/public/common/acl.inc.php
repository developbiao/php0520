<?php
session_start();
header("Content-Type:text/html;charset:utf-8");
if(!$_SESSION['adminlogin']){
	echo "<script>alert('你不是管理员，请Gun远点!');</script>";
	echo "<script>location='/myshop/admin/login/login.php'</script>";
}
?>