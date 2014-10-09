<?php 
$sqlOrders="select orders.id,orders.code,orders.time,orders.status_id,status.sname from orders,status where orders.status_id=status.id and orders.user_id={$_SESSION[user_id]} group by orders.code order by orders.id";

$rstOrders=mysql_query($sqlOrders);
 ?>

<table border='1px' cellspacing='0' class="person_order_table">
	<tr>
		<th>ID</th>
		<th>订单号</th>
		<th>下单时间</th>
		<th>订单状态</th>
	</tr>
	<?php 
		while($rowOrders=mysql_fetch_assoc($rstOrders)){
			echo "<tr>";
			echo "<td>{$rowOrders['id']}</td>";
			echo "<td><a href='index.php?code={$rowOrders['code']}&action=shops'>{$rowOrders['code']}</a></td>";
			echo "<td>".date('Y-m-d H:i:s',$rowOrders['time'])."</td>";
			echo "<td>{$rowOrders['sname']}</td>";
			echo "</tr>";
		}
	 ?>
</table>