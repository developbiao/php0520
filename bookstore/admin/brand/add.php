<?php 
include '../public/common/acl.inc.php';
include "../public/common/config.inc.php";
$sqlClass='select * from class order by id';
$rstClass=mysql_query($sqlClass);

 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<center>
	<h3>添加品牌</h3>	
	<form action="insert.php" method='post'>
		<table width='' border='1px' cellspacing='0'>
			<tr>
				<td>品牌:</td>
				<td><input type="text" name='bname'></td>
			</tr>	

			<tr>
				<td>分类</td>	
				<td>
					<select name="class_id" id="">
						<?php 
							while($rowClass=mysql_fetch_assoc($rstClass)){
								echo "<option value='{$rowClass[id]}'>{$rowClass[cname]}</option>";
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