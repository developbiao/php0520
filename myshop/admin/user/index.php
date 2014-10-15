<?php
/*
@Describe:用户管理首页
@Author:GongBiao
@Date:2014/09/24
*/
include '../../public/common/dbconfig.inc.php';
include '../public/common/acl.inc.php';
$sqlUser='select * from user order by id';
$rstUser=mysql_query($sqlUser);
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>index</title>
</head>
<body>
	<center>
	<p><b>查看用户</b></p>
	<p><b><a href="add.php">添加用户</a></b></p>
	<table width='700px' border='1px' cellspacing='0px'>
		<?php
		echo "<tr>";
		echo "<td>ID</td>";
		echo "<td>用户名</td>";
		//echo "<td>密码</td>";
		echo "<td>注册时间</td>";
		echo "<td>管理员</td>";
		echo "<td>修改</td>";
		echo "<td>删除</td>";
		echo "</tr>";
		while($rowUser = mysql_fetch_assoc($rstUser)){
			echo "<tr>";
			echo "<td>{$rowUser['id']}</td>";
			echo "<td>{$rowUser['username']}</td>";
			//echo "<td>{$rowUser['password']}</td>"; //显示用户密码
			echo "<td>".date('Y-m-d H:i:s',$rowUser['regtime'])."</td>";
			//echo "<td>{$rowUser['admin']}</td>";
			if($rowUser['admin']){
				echo "<td>Yes</td>";
			}else{
				echo "<td>No</td>";
			}
			echo "<td><a href='edit.php?id={$rowUser['id']}'>修改</a></td>";
			echo "<td><a href='delete.php?id={$rowUser['id']}'>删除</a></td>";
			echo "</tr>";
		}
		?>
	</table>
</center>
</body>
</html>