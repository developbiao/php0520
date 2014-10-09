<?php 
session_start();
header('content-type:text/html;charset=utf-8');
include "../public/common/config.inc.php";

$username=$_POST['username'];
$password=md5($_POST['password']);
$repassword=md5($_POST['repassword']);
$fcode=strtolower($_POST['fcode']);
$vcode=strtolower($_SESSION['vcode']);
$time=time();

if($fcode==$vcode){
	if($username!='admin'){
		if($password==$repassword){
			$sqlUser="insert into user(username,password,time) values('{$username}','{$password}',{$time})";
			if(mysql_query($sqlUser)){
				$_SESSION[username]=$username;
				$_SESSION[userlogin]=1;
				$_SESSION[user_id]=mysql_insert_id();

				echo "<script>location='{$_SESSION[url]}'</script>";
			}
		}else{
			$_SESSION[httpref]=$_SESSION[url];
			echo "<script>alert('两次密码不一致!')</script>";
			echo "<script>location='reg.php'</script>";
		}
	}else{
		$_SESSION[httpref]=$_SESSION[url];
		echo "<script>alert('用户名已存在!')</script>";
		echo "<script>location='reg.php'</script>";
	}
	
}else{
	$_SESSION[httpref]=$_SESSION[url];
	echo "<script>alert('验证码有误!')</script>";
	echo "<script>location='reg.php'</script>";
}

 ?>