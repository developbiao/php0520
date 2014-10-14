<?php
/*
@Describe:写到订单表了
@Author:GongBiao
@Date:2014/10/14  星期二 20:16
*/
include '../../public/common/dbconfig.inc.php';
$sqlOrders = "SELECT orders.id, orders.code, orders.time, orders.relation_id, orders.orderstat_id, orderstat.name, user.username, relation.address FROM orders, orderstat, user, relation WHERE orders.orderstat_id=orderstat.id AND orders.user_id=user.id AND orders.relation_id=relation.id GROUP BY orders.code ORDER BY id";
$rstOrders = mysql_query($sqlOrders);
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" Content="text/html"; charset="utf-8">
	<title>index</title>
</head>
<body>
	<center>
		<h3>查看订单</h3>
		<table width='700px' border='1px' cellspacing='0'>
			<tr>
				<th>ID</th>
				<th>订单号</th>
				<th>用户名</th>
				<th>下单时间</th>
				<th>订单状态</th>
				<th>联系方式</th>
				<th>修改</th>
				<th>删除</th>
			</tr>
			<?php 
				while($rowOrders=mysql_fetch_assoc($rstOrders)){
					// echo "<pre>";
					// var_dump($rowOrders);
					// echo "</pre>";
					echo "<tr>";
					echo "<td>{$rowOrders['id']}</td>";
					echo "<td><a href='shops.php?code={$rowOrders['code']}'>{$rowOrders['code']}</a></td>";
					echo "<td>{$rowOrders['username']}</td>";
					echo "<td>".date('Y-m-d H:i:s',$rowOrders['time'])."</td>";
					echo "<td>{$rowOrders['name']}</td>";
					echo "<td><a href='conns.php?conn_id={$rowOrders['realtion_id']}'>{$rowOrders['address']}</a></td>";
					echo "<td><a href='edit.php?code={$rowOrders[code]}&status_id={$rowOrders[orderstat_id]}'>修改</a></td>";
					echo "<td><a href='delete.php?code={$rowOrders[code]}'>删除</a></td>";
					echo "</tr>";
				}
			 ?>
		</table>
	</center>	
</body>
</html>