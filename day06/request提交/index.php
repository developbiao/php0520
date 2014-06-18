<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
	<h1>用户信息</h1>
	<form action="rev.php" method="post">
	姓名: <input type="text" name="name" id="">
	<br>
	年龄: <input type="text" name="age" id="">
	<input type="submit" value="提交">

	<h1><?php print_r($_POST)?> </h1>
</body>
</html>