<?php 
include '../public/common/acl.inc.php';

include '../public/common/config.inc.php';
$sqlBrand="select brand.*,class.cname from brand,class where brand.class_id=class.id order by id";
$rstBrand=mysql_query($sqlBrand);
 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<center>
		<h3>查看品牌</h3>
		<table width='700px' border='1px' cellspacing='0'>
			<tr>
				<th>ID</th>
				<th>品牌</th>
				<th>分类</th>
				<th>修改</th>
				<th>删除</th>
			</tr>
			<?php 
				while($rowBrand=mysql_fetch_assoc($rstBrand)){
					echo "<tr>";
					echo "<td>{$rowBrand['id']}</td>";
					echo "<td>{$rowBrand['bname']}</td>";
					echo "<td>{$rowBrand['cname']}</td>";
					echo "<td><a href='edit.php?id={$rowBrand[id]}'>修改</a></td>";
					echo "<td><a href='delete.php?id={$rowBrand[id]}'>删除</a></td>";
					echo "</tr>";
				}
			 ?>
		</table>
	</center>
</body>
</html>