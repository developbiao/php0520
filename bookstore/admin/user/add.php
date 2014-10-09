<?php 
include '../public/common/acl.inc.php';

 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<center>	
		<h3>添加用户</h3>
		<form action="insert.php" method='post'>
			<table width='' border='1px' cellspacing='0'>
				<tr>
					<td>姓名:</td>
					<td><input type="text" name='username'></td>
				</tr>
				<tr>
					<td>密码:</td>
					<td><input type="password" name='password'></td>
				</tr>
				<tr>
					<td><input type="submit" value="添加"></td>
					<td align='center'><input type="reset" value="重置"></td>
				</tr>
			</table>
		</form>
	</center>	
</body>
</html>