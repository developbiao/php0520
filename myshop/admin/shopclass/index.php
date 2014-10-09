<?php
	include '../../public/common/dbconfig.inc.php';
	$sqlClass = "SELECT * FROM shopclass ORDER BY id";
	$rstClass = mysql_query($sqlClass);
?>
<!DOCTYPE HTML>
<html lang="en">
<head> 
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
	<title>查看商品分类</title>
</head>
<body>
	<center>
		<h3>查看商品分类</h3>
		<table border='1px' width='700' cellspacing='0px'>
			<tr> 
				<th>ID</th>
				<th>名称</th>
				<th>修改</th>
				<th>删除</th>
			</tr>
				<?php
					while($rowClass = mysql_fetch_assoc($rstClass)){
						echo  "<tr>";
						echo "<td>{$rowClass['id']}</td>";
						echo "<td>{$rowClass['name']}</td>";
						echo "<td><a href='edit.php?id={$rowClass['id']}'>修改</a></td>";
						echo "<td><a href='delete.php?id={$rowClass['id']}'>删除</a></td>";
						echo "</tr>";
					}
				?>
		</table>
	</center>
</body>
</html>