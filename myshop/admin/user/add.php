<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>add</title>
</head>
<body>
	<center>
		<p><b>添加用户</b></p>
		<form action="insert.php" method="post">
			<table width="300px" border="1px" cellspacing='0'>
				<tr>
					<td>用户名:</td>
					<td><input type="text" name="username"/></td>
				</tr>
				<tr>
					<td>密码:</td>
					<td><input type="password" name="password" value=""/></td>
				</tr>
				<tr>
					<td>确认密码:</td>
					<td><input type="password" name="repassword" value=""/></td>
				</tr>
				<tr>
					<td><input type="submit" value="提交"/></td>
					<td><input type="reset" value="重置"/></td>

				</tr>

			</table>
		</form>
	</center>
</body>
</html>