<?php 
include '../public/common/acl.inc.php';

include '../public/common/config.inc.php';

$code=$_GET['code'];
$sqlOrders="select orders.shop_id,shop.sname,shop.image,orders.num,orders.price from orders,shop where orders.shop_id=shop.id and orders.code='{$code}' order by orders.id";
$rstOrders=mysql_query($sqlOrders);
 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<center>
		<h3>查看订单</h3>
		<table width='700px' border='1px' cellspacing='0'>
			<tr>
				<th>商品ID</th>
				<th>商品名称 </th>
				<th>商品图片</th>
				<th>商品数量</th>
				<th>商品价格</th>
			</tr>
			<?php 
				while($rowOrders=mysql_fetch_assoc($rstOrders)){
					echo "<tr>";
					echo "<td>{$rowOrders['shop_id']}</td>";
					echo "<td>{$rowOrders['sname']}</td>";
					echo "<td><img src='../../public/uploads/th_{$rowOrders['image']}' width='100' height='100'></td>";
					echo "<td>{$rowOrders['num']}</td>";
					echo "<td>{$rowOrders['price']}</td>";
					echo "</tr>";
				}
			 ?>
		</table>
	</center>
</body>
</html>