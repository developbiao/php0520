<?php
	include '../../public/common/dbconfig.inc.php';
	$id = $_GET['id'];
	$sqlClass = "SELECT * FROM shopclass WHERE id={$id}";
	//echo $sqlClass;
	//exit;
	$rstClass = mysql_query($sqlClass);
	$rowClass = mysql_fetch_assoc($rstClass);

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
	<title>修改商品分类</title>
</head>
<body>
	<center>
		<h3>修改商品分类</h3>
		<form action='update.php' method='post'>
			<table border='1px' width='' cellspacing="0">
				<tr>
					<td>名称:</td>
					<td><input type="text" name="cname" value="<?php echo $rowClass['name']?>"></td>
				</tr>
				<tr>
					<input type="hidden" value="<?php echo $rowClass['id']?>" name="id"/>
					<td><input type="submit" value="修改"></td>
					<td><input type="reset" value="重置"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>