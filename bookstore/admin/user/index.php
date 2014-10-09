<?php 
include '../public/common/acl.inc.php';

include "../public/common/config.inc.php";

$sqlCnt="select count(*) from user order by id";
$rstCnt=mysql_query($sqlCnt);
$rowCnt=mysql_fetch_row($rstCnt);
$total=$rowCnt[0];

$length=3;
$page=$_GET['p']?$_GET['p']:1;
$offset=($page-1)*$length;

$totpage=ceil($total/$length);

$prevpage=$page-1;

if($page>=$totpage){
	$nextpage=$totpage;
}else{
	$nextpage=$page+1;
}

$sqlUser="select * from user order by id limit {$offset},{$length}";
$rstUser=mysql_query($sqlUser);
 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<center>
		<h3>查看用户(<?php echo $total ?>)</h3>
		<table width='700px' border='1px' cellspacing='0'>
			<tr>
				<th>ID</th>
				<th>用户名</th>
				<th>注册时间</th>
				<th>修改</th>
				<th>删除</th>
			</tr>
			<?php 
			while($rowUser=mysql_fetch_assoc($rstUser)){
				echo "<tr>";
				echo "<td>{$rowUser['id']}</td>";
				echo "<td>{$rowUser['username']}</td>";
				echo "<td>".date('Y-m-d',$rowUser['time'])."</td>";
				echo "<td><a href='edit.php?id={$rowUser['id']}'>修改</a></td>";
				echo "<td><a href='delete.php?id={$rowUser['id']}'>删除</a></td>";
				echo "</tr>";
			}
			 ?>
		</table>
		<?php 
			echo "<h3><a href='index.php?p=1'>首页</a>|<a href='index.php?p={$prevpage}'>上一页</a>|<a href='index.php?p={$nextpage}'>下一页</a>|<a href='index.php?p={$totpage}'>末页</a></h3>";
		 ?>
		
	</center>
</body>
</html>
