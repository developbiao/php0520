<?php 
include '../public/common/acl.inc.php';

include '../public/common/config.inc.php';
$sqlStatus="select * from status order by id";
$rstStatus=mysql_query($sqlStatus);
 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<center>
		<h3>查看订单状态</h3>
		<table width='700px' border='1px' cellspacing='0'>
			<tr>
				<th>ID</th>
				<th>名称</th>
				<th>修改</th>
				<th>删除</th>
			</tr>
			<?php 
				while($rowStatus=mysql_fetch_assoc($rstStatus)){
					echo "<tr>";
					echo "<td>{$rowStatus['id']}</td>";
					echo "<td>{$rowStatus['sname']}</td>";
					echo "<td><a href='edit.php?id={$rowStatus[id]}'>修改</a></td>";
					echo "<td><a href='delete.php?id={$rowStatus[id]}'>删除</a></td>";
					echo "</tr>";
				}
			 ?>
		</table>
	</center>
</body>
</html>