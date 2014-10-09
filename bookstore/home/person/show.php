<?php 
$sqlConn="select * from conn where user_id={$_SESSION[user_id]}";
$rstConn=mysql_query($sqlConn);
echo "<table border='1px' cellspacing='0' class='person_show_table'>";
echo "<tr>";
echo "<th>姓名</th>";
echo "<th>地址</th>";
echo "<th>电话</th>";
echo "<th>邮箱</th>";
echo "<th>修改</th>";
echo "<th>删除</th>";
echo "</tr>";
while($rowConn=mysql_fetch_assoc($rstConn)){
	echo "<tr>";
	echo "<td>{$rowConn[rname]}</td>";
	echo "<td>{$rowConn[addr]}</td>";
	echo "<td>{$rowConn[tel]}</td>";
	echo "<td>{$rowConn[email]}</td>";
	echo "<td><a href='index.php?id={$rowConn[id]}&action=edit'>修改</a></td>";
	echo "<td><a href='delete.php?id={$rowConn[id]}'>删除</a></td>";
	echo "</tr>";
}
echo "</table>";
 ?>