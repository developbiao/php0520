<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="Content-type content=text/html"; charset="utf-8"/> 
	<title>rev</title>
</head>
<body>
<h3>收到的信息</h3>
<?php
/*
@Descrebe:这是一个收到数据的页面
@Author:GongBiao
@Date:2014/06/12
*/
	header("content-type:text/html; charset=utf-8");

	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	echo $_GET['name'];
?>
</body>
</html>