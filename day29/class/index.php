<?php
/*
 * @Describe:用户管理页面
 * @Author:GongBiao
 * @Date:2014/08/21
 */
header("content-type:text/html; charset=utf-8");
//连接数据库
$conn = mysql_connect("192.168.176.128:3306", "root", "123456");

//选择数据库
mysql_select_db("studentdb");

//设置客户端和连接字符集
mysql_query("set names utf8");

//$sql = "SELECT * FROM y1 ORDER BY id LIMIT 10,10";


//0,10  第1页 (1-1) * 10
//10,10 第2页 (2-1) * 10
//20,10 第3页 (3-1) * 10

$length = 10;
$pagenum = $_GET['page']?$_GET['page']:1;

//计算总页数
$totsql = "SELECT COUNT(*) FROM y1";
$totarr = mysql_fetch_row(mysql_query($totsql));
$pagetot = ceil($totarr[0] / $length);

//判断当前的页是不是超过了总页数
if($pagenum >= $pagetot){
	$pagenum = $pagetot;
}

//计算offset
$offset = ($pagenum - 1) * $length;




//获取所有数据
$sql = "SELECT * FROM cls ORDER BY id LIMIT {$offset}, {$length}";

//从表单收到的数据
$username = "user1";
$password = "123456";



//资源集
$result = mysql_query($sql);
echo "<center>";
echo "<h3>查看班级|<a href='add.php'>添加班级</a></h3>";
//echo "<h2>共查到:".mysql_num_rows($result)."条数据</h2>";
echo "<table width='700px' border='1px'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>班级</th>";
echo "<th>修改</th>";
echo "<th>删除</th>";
echo "</tr>";
while($row = mysql_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>{$row['id']}</td>";
	echo "<td>{$row['name']}</td>";
	echo "<td><a href='edit.php?id={$row['id']}&page={$pagenum}'>修改</a></d>";
	echo "<td><a href='del.php?id={$row['id']}&page={$pagenum}'>删除</a> </td>";
	echo "</tr>";
}
echo "</table>";

//计算上一页，和下一页
$prevpage = $pagenum - 1;
$nextpage = $pagenum + 1;


echo "<h3><a href='index.php?page={$prevpage}'>上一页</a>|<a href='index.php?page={$nextpage}'>下一页</a></h3>";
echo "</center>";

//释放资源集
mysql_free_result($result);


//释放连接资源
mysql_close($conn);
?>
