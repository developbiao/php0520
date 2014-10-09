<?php
include '../../public/common/dbconfig.inc.php';
$sqlClass = 'SELECT * FROM shopclass ORDER BY id';
$rstClass = mysql_query($sqlClass);
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>添加品牌</title>
</head>
<body>
	<center>
		<h3>添加品牌</h3>
		<form action="insert.php" method="post">
			<table width='' border='1px' cellspacing='0px'>
				<tr>
					<td>品牌:</td>
					<td><input type="text" name="bname"></td>
				</tr>
				<tr>
					<td>分类</td>
					<td>
						<select name="class_id" id="">
							<?php
								while($rowClass=mysql_fetch_assoc($rstClass)){
									echo "<option values='{$rowClass[id]}'>{$rowClass['name']}</option>";
								}
							?>	
						</select>
					</td>
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