<?php
header("Content-Type:text/html; charset=utf-8");
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($username=="user1" && $password=="123456"){
	$_SESSION['username'] = $username;
	$_SESSION['login'] = 1;
	echo "<script>location='index.php'</script>";
}else{
	echo "<script>alert('你输入的用户名或密码不正确，请检查!');</script>";
	echo "<script>location='login.php'</script>";

}

?>
