<?php
	include '../../public/common/dbconfig.inc.php';
	$id=$_GET['id'];
	$sqlClass = "SELECT * FROM shopclass WHERE id={$id}";
	$rstClass = mysql_query($sqlClass);
	$rowClass = mysql_fetch_assoc($rstClass);
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>修改商品分类</title>
</head>
<body>
	<center>
		<h3>修改商品分类</h3>
		<form action="update.php" method="post">
			<table width='' border='1px' cellspacing='0px'>
				<tr>
					<td>名称:</td>
					<td><input type="text" name='cname' value='<?php echo $rowClass['name']?>'></td>
				</tr>
					<input type="hidden"  name='id' value='<?php echo $id?>'>
				<tr>
					<td><input type="submit" value="修改"></td>
					<td><input type="reset" value="重置"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>