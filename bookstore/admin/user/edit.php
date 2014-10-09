<?php 
include '../public/common/acl.inc.php';

include "../public/common/config.inc.php";

$id=$_GET['id'];
$sqlUser="select * from user where id={$id}";
$rstUser=mysql_query($sqlUser);
$rowUser=mysql_fetch_assoc($rstUser);
 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<center>	
		<h3>修改用户</h3>
		<form action="update.php" method='post'>
			<table width='' border='1px' cellspacing='0'>
				<tr>
					<td>姓名:</td>
					<td><input type="text" name='username' value='<?php echo $rowUser['username'] ?>'></td>
				</tr>
				<tr>
					<td>密码:</td>
					<td><input type="text" name='password' value=''></td>
				</tr>
				<tr>
					<input type="hidden" name="id" value="<?php echo $id ?>">
					<td><input type="submit" value="修改"></td>
					<td align='center'><input type="reset" value="重置"></td>
				</tr>
			</table>
		</form>
	</center>	
</body>
</html>