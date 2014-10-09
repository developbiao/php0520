<?php
/*
@Describe:查看商品
@Author:GongBiao
@Date:2014/10/02
*/
	include '../../public/common/dbconfig.inc.php';
	$sqlShop = "SELECT shop.*, brand.name AS bname, shopclass.name AS cname FROM brand,shopclass,shop WHERE brand.shopclass_id=shopclass.id AND shop.brand_id=brand.id ORDER BY id";
	// echo $sqlShop;
	// exit;
	$rstShop = mysql_query($sqlShop);	
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>商品首页</title>
</head>
<body>
	<center>
		<h3>查看商品</h3>
		<table width='700px' border='1px' cellspacing='0'>
			<tr>
				<th>商品ID</th>
				<th>图片</th>
				<th>品牌</th>
				<th>分类</th>
				<th>价格</th>
				<th>库存</th>
				<th>货架</th>
				<th>修改</th>
				<th>删除</th>
				<th><a href="add.php">添加</a></th>
			</tr>
			<?php
				while($rowShop = mysql_fetch_assoc($rstShop)){
					echo "<tr>";
					echo "<td>{$rowShop['id']}</td>";
					echo "<td>{$rowShop['name']}</td>";
					echo "<td><a href='../../public/uploads/{$rowShop['image']}' target=_blank><img src='../../public/uploads/th_{rowShop['image']}' width='100px' height='100px'></a></td>";
					echo "<td>{$rowShop['bname']}</td>";
					echo "<td>{$rowShop['cname']}</td>";
					echo "<td>{$rowShop['price']}</td>";
					echo "<td>{$rowShop['stock']}</td>";
					if($rowShop['shelf']){
						echo "<td>上架</td>";
					}else{
						echo "<td>下架</td>";
					}
					echo "<td><a href='edit.php?id={$rowShop['id']}'>修改</a></td>";
					echo "<td><a href='delete.php?id={$rowShop['id']}&image={$rowShop[image]}'>删除</a></td>";
					echo "</tr>";
				}
			?>

		</table>
	</center>
</body>
</html>