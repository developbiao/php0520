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
	<h3>管理员密码修改:</h3>
	<form action="update.php" method='post'>
		<table width='' border='1px' cellspacing='0px'>
			<tr>
				<td>管理员:</td>
				<td><input type="text" value='admin' disabled></td>
			</tr>	
			<tr>
				<td>密码:</td>
				<td><input type="text" name='password'></td>
			</tr>
			<tr>
				<td><input type="submit" value='修改'></td>
				<td><input type="reset" value='重置'></td>
			</tr>
		</table>
	</form>	
	</center>
</body>
</html>