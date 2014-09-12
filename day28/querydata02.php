<?php
/*
 * @Describe:php查询数据库自定义错误
 * @Date:2014/08/21
 * @Author:GongBiao
 *
 */
header("content-type:text/html; charset=utf-8");
$conn = @mysql_connect("192.168.176.128:3306", "root", "12345");
//报错信息
//var_dump($conn);
if(!$conn){
	//echo "<h2> mysql错误编码:".mysql_errno()."</h2>";
	//echo "<h2> mysql错误信息:".mysql_error()."</h2>";
	echo "你输入的用户名或密码不正确!";
}else{


mysql_select_db("studentdb");
mysql_query("set names utf8");

//通过php进行select操作:
$sql = "SELECT id, username, password FROM y1 ORDER BY id";

//执行这条sql语句

$result = mysql_query($sql);

echo "<h3>会员信息</h3>";

//从结果中拿出来数据
echo "<table width='700px' border='1px'>";
while($row = mysql_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>{$row['id']}</td><td>{$row['username']}</td><td>{$row['password']}</td>";
	echo "</tr>";
}
echo "</table>";

//打印出$row一行
echo "<pre>";
print_r($row);
echo "</pre>";

//释放连接资源
mysql_close($conn);
}
?>
