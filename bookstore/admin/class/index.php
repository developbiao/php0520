<?php 
include '../public/common/acl.inc.php';

include '../public/common/config.inc.php';
$sqlClass="select * from class order by id";
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
		<h3>查看商品分类</h3>
		<table width='700px' border='1px' cellspacing='0'>
			<tr>
				<th>ID</th>
				<th>名称</th>
				<th>修改</th>
				<th>删除</th>
			</tr>
			<?php 
				while($rowClass=mysql_fetch_assoc($rstClass)){
					echo "<tr>";
					echo "<td>{$rowClass['id']}</td>";
					echo "<td>{$rowClass['cname']}</td>";
					echo "<td><a href='edit.php?id={$rowClass[id]}'>修改</a></td>";
					echo "<td><a href='delete.php?id={$rowClass[id]}'>删除</a></td>";
					echo "</tr>";
				}
			 ?>
		</table>
	</center>
</body>
</html>
