<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type content=text/html"; charset="utf-8" />
	<meta charset="utf-8"/>
	<title>resive接收页面</title>
</head>
<body>
	<h3> is ok !</h3>
	<h1>欢迎 <?php  echo $_GET['name']?></h1>
	<h3>姓名: <?php echo $_GET['name']?></h3>
	<h3>年龄: <?php echo $_GET['age']?></h3>
	<h3>性别：<?php echo $_GET['sex']?></h3>
	<h3>学校：<?php echo $_GET['sch']?></h3>
</body>
</html>