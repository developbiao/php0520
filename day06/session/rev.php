<?php
	header("content-type:text/html; charset=utf-8");
	session_start(); // 值得注意的事情是session_start不能有输出
	echo "<h1>用户登录页面 </h1>";

	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";

	echo "<h1>{$_SESSION['name']}你好，我爱你！</h1>";
	echo "<h1>我觉得你是软开{$_SESSION['class']}班的同学! </h1>";

		
?>

