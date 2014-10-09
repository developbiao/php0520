<?php
include '../../public/common/dbconfig.inc.php';
$sqlClass = "SELECT * FROM shopclass ORDER BY id";
$rstClass= mysql_query($sqlClass);
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<title>添加商品</title>
</head>
<body>
	<center>
		<form action="insert.php" method="post" enctype="multipart/form-data">
			<table border='1px' cellspacing='0'>
				<tr>
					<td>商品:</td>
					<td><input type="text" name="sname"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>