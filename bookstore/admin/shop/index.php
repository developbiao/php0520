<?php 
include '../public/common/acl.inc.php';

include '../public/common/config.inc.php';
$sqlShop="select shop.*,brand.bname,class.cname from brand,class,shop where brand.class_id=class.id and shop.brand_id=brand.id order by id";
$rstShop=mysql_query($sqlShop);
 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<center>
		<h3>查看图书商品</h3>
		<table width='700px' border='1px' cellspacing='0'>
			<tr>
				<th>ID</th>
				<th>商品</th>
				<th>图片</th>
				<th>品牌</th>
				<th>分类</th>
				<th>价格</th>
				<th>库存</th>
				<th>货架</th>
				<th>修改</th>
				<th>删除</th>
			</tr>
			<?php 
				while($rowShop=mysql_fetch_assoc($rstShop)){
					echo "<tr>";
					echo "<td>{$rowShop['id']}</td>";
					echo "<td>{$rowShop['sname']}</td>";
					echo "<td><a href='../../public/uploads/{$rowShop['image']}' target='_blank'><img src='../../public/uploads/th_{$rowShop['image']}' width='100' height='100'></a></td>";
					echo "<td>{$rowShop['bname']}</td>";
					echo "<td>{$rowShop['cname']}</td>";
					echo "<td>{$rowShop['price']}</td>";
					echo "<td>{$rowShop['stock']}</td>";

					if($rowShop[shelf]){
						echo "<td>上架</td>";
					}else{
						echo "<td>下架</td>";
					}

					echo "<td><a href='edit.php?id={$rowShop[id]}'>修改</a></td>";
					echo "<td><a href='delete.php?id={$rowShop[id]}&image={$rowShop[image]}'>删除</a></td>";
					echo "</tr>";
				}
			 ?>
		</table>
	</center>
</body>
</html>
