<?php 
include '../public/common/acl.inc.php';

include '../public/common/config.inc.php';
$sqlOrders="select orders.id,orders.code,orders.time,orders.conn_id,orders.status_id,status.sname,user.username from orders,status,user where orders.status_id=status.id and orders.user_id=user.id group by orders.code order by orders.id";

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
					echo "<tr>";
					echo "<td>{$rowOrders['id']}</td>";
					echo "<td><a href='shops.php?code={$rowOrders['code']}'>{$rowOrders['code']}</a></td>";
					echo "<td>{$rowOrders['username']}</td>";
					echo "<td>".date('Y-m-d H:i:s',$rowOrders['time'])."</td>";
					echo "<td>{$rowOrders['sname']}</td>";
					echo "<td><a href='conns.php?conn_id={$rowOrders['conn_id']}'>联系方式</a></td>";
					echo "<td><a href='edit.php?code={$rowOrders[code]}&status_id={$rowOrders[status_id]}'>修改</a></td>";
					echo "<td><a href='delete.php?code={$rowOrders[code]}'>删除</a></td>";
					echo "</tr>";
				}
			 ?>
		</table>
	</center>
</body>
</html>