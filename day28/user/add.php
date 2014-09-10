<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html" charset="utf-8">
	<title>adduser</title>
</head>
<body>
	<center>
		<h3>用户添加</h3>
		<form action="insert.php" method="post">
			用户&nbsp;:<input type="text" name="username" id="">
			<br/>
			密码&nbsp;:<input type="password" name="password" id="">
			<br/>
			确定密码:<input type="password" name="repassword" id="">
			<br/>
			<input type="submit" value="提交">
			<input type="reset" value="重置">
		</form>
	</center>
</body>
</html>
