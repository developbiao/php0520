<?php 
include '../public/common/acl.inc.php';

include '../public/common/config.inc.php';
$id=$_GET['id'];
$sqlClass="select * from class where id={$id}";
$rstClass=mysql_query($sqlClass);
$rowClass=mysql_fetch_assoc($rstClass);
 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<center>
	<h3>修改分类</h3>	
	<form action="update.php" method='post'>
		<table width='' border='1px' cellspacing='0'>
			<tr>
				<td>名称:</td>
				<td><input type="text" name='cname' value='<?php echo $rowClass['cname'] ?>'></td>
			</tr>	
			
			<input type="hidden" name='id' value='<?php echo $id ?>'>

			<tr>
				<td><input type="submit" value="添加"></td>
				<td><input type="reset" value="重置"></td>
			</tr>
		</table>
	</form>
	</center>
</body>
</html>