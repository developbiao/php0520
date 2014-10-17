<?php 
include '../public/common/acl.inc.php';

include '../public/common/config.inc.php';

$id=$_GET['conn_id'];
$sqlconn="select * from conn where id={$id}";
$rstconn=mysql_query($sqlconn);
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
				<th>联系方式ID</th>
				<th>真实姓名</th>
				<th>地址</th>
				<th>电话</th>
				<th>邮箱</th>
			</tr>
			<?php 
				while($rowconn=mysql_fetch_assoc($rstconn)){
					echo "<tr>";
					echo "<td>{$rowconn['id']}</td>";
					echo "<td>{$rowconn['rname']}</td>";
					echo "<td>{$rowconn['addr']}</td>";
					echo "<td>{$rowconn['tel']}</td>";
					echo "<td>{$rowconn['email']}</td>";
					echo "</tr>";
				}
			 ?>
		</table>
	</center>
</body>
</html>