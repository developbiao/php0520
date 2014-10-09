<?php
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>添加商品分类</title>
</head>
<body>
	<center>
		<h3>添加商品分类</h3>
		<form action="insert.php" method="post">
			<table width='' border='1px' cellspacing='0px'>
				<tr>
					<td>名称:</td>
					<td><input type="text" name="cname"></td>
				</tr>
				<tr>
					<td><input type="submit" value="添加"></td>
					<td><input type="reset" value="重置"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>