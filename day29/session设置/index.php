<?php
/*
 * @Describe:session登录实验
 * @Author:GongBiao
 * @Date:2014/08/22
 */
session_start();
if(!$_SESSION['login']){
	header("localtion:login.php");
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" Content="text/html" charset="utf-8">
	<title>首页</title>
</head>
<body>
	<h1>欢迎<?php echo $_SESSION['username']?>登录|<a href="logout.php">退出</a></h1>
	<hr>
	<h2>页面内容</h2>
	<h2>页面内容</h2>
	<h2>页面内容</h2>
	<h2>页面内容</h2>
	<h2>页面内容</h2>
	<h2>页面内容</h2>
	<h2>页面内容</h2>
	<h2>页面内容</h2>
	<h2>页面内容</h2>
	<h2>页面内容</h2>
	<h2>页面内容</h2>
	<h2>页面内容</h2>
	<h2>页面内容</h2>
</body>
</html>
