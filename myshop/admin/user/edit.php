<?php
include '../../public/common/dbconfig.inc.php';
$id=$_GET['id'];
$sqlUser="SELECT * FROM user WHERE id={$id}";
$rstUser=mysql_query($sqlUser);
$rowUser=mysql_fetch_assoc($rstUser);
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>edit</title>
</head>
<body>
	<center>
		<h3>修改用户</h3>
		<form action='update.php' method='post'>
			<table width='' border='1px' cellspacing='0px'>
				<tr>
					<td>用户名:</td>
					<td><input type="text" name="username" value='<?php echo $rowUser['username']?>'/></td>
				</tr>
				<tr>
				<tr>
					<td>密码:</td>
					<td><input type="password" name="password" value=""/></td>
				</tr>
					<td>确认密码:</td>
					<td><input type="password" name="repassword" value=""/></td>
				</tr>
				<tr>
					<td>管理员:</td>
					<td>
						<?php
						if($rowUser['admin']){
							echo "<input type='radio' name='isadmin' value='1' checked/>是";
							echo "<input type='radio' name='isadmin' value='0' />否";
						}else{
							echo "<input type='radio' name='isadmin' value='1'/>是";
							echo "<input type='radio' name='isadmin' value='0' checked />否";
						}
						?>
					</td>
				</tr>
				<tr>
					<input type="hidden" name="id" value="<?php echo $id?>"/>
					<td><input type="submit" value="修改" /></td>
					<td><input type="reset" value="重置"/></td>
				</tr>

			</table>
		</form>
	</center>

</body>
</html>