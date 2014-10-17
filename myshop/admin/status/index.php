<?php
 include '../../public/common/dbconfig.inc.php';
 $sqlStatus = "SELECT * FROM orderstat ORDER BY id";
 $rstStatus = mysql_query($sqlStatus);
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	 <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
	 <title>查看订单状态</title>
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
	 			while($rowStatus = mysql_fetch_assoc($rstStatus)){
	 				echo "<tr>";
	 				echo "<td>{$rowStatus['id']}</td>";
	 				echo "<td>{$rowStatus['name']}</td>";
	 				echo "<td><a href='edit.php?id={$rowStatus['id']}'>修改</a></td>";
	 				echo "<td><a href='delete.php?id={$rowStatus['id']}'>删除</a></td>";
	 				echo "</tr>";
	 			}
	 		?>
	 	</table>
	 </center>
</body>
</html>