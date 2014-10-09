<?php 
$sqlConn="select * from conn where id={$_GET[id]}";
$rstConn=mysql_query($sqlConn);
$rowConn=mysql_fetch_assoc($rstConn);

 ?>
<div class="person_add">
	<form action="update.php" method='post'>
		<table border='1px' cellspacing='0' class="person_add_table" width='200px'>
			<tr>
				<td>姓名:</td>
				<td><input type="text" name='rname' value='<?php echo $rowConn[rname] ?>'></td>
			</tr>
			<tr>
				<td>地址:</td>
				<td><input type="text" name='addr' value='<?php echo $rowConn[addr] ?>'></td>
			</tr>
			<tr>
				<td>邮箱:</td>
				<td><input type="text" name='email' value='<?php echo $rowConn[email] ?>'></td>
			</tr>
			<tr>
				<td>电话:</td>
				<td><input type="text" name='tel' value='<?php echo $rowConn[tel] ?>'></td>
			</tr>
			<input type="hidden" name='id' value='<?php echo $rowConn[id] ?>'>
			<tr>
				<td><input type="submit" value='修改'></td>
				<td><input type="reset" value='清空'></td>
			</tr>
		</table>
	</form>
</div>