<?php
include '../../public/common/dbconfig.inc.php';
$sqlBrand = "SELECT * FROM brand ORDER BY id";
$rstBrand = mysql_query($sqlBrand);
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>index</title>
</head>
<body>
	<center>
		<h3>查看品牌</h3>
		<table width='700px' border='1px' cellspacing='0'>
			<tr>
				<td>ID</td>
				<td>品牌</td>
				<td>修改</td>
				<td>删除</td>
			</tr>
			<?php
				while($rowBrand= mysql_fetch_assoc($rstBrand)){
					echo "<tr>";
					echo "<td>{$rowBrand['id']}</td>";
					echo "<td>{$rowBrand['name']}</td>";
					echo "<td><a href='edit.php?id={$rowBrand['id']}'>修改</a></td>";
					echo "<td><a href='delete.php?id={$rowBrand['id']}'>删除</a></td>";
					echo "</tr>";
				}
			?>
		</table>
	</center>
</body>
</html>