<?php
/*
 * @Describe:修改用户信息
 * @Author:GongBiao
 * @Date:2014/08/21
 */
header("content-type:text/html; charset=utf-8");

//通过PHP连接mysql数据库
$conn = @mysql_connect("192.168.176.128:3306", "root", "123456");

//选择数据库
mysql_select_db("studentdb");

//设置客户端字符集
mysql_query("set names utf8");

//跟据id拿数据
$sql = "SELECT * FROM y1 WHERE id={$_GET['id']}";
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);

?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html" charset="utf-8">
	<title>adduser</title>
</head>
<body>
	<center>
		<h3>修改用户信息</h3>
		<form action="update.php" method="post">
		用户&nbsp;:<input type="text" name="username" id="" value="<?php echo $row['username']?>">
			<br/>
			密码&nbsp;:<input type="password" name="password" id="" value="<?php echo $row['password']?>">
			<br/>
			<input type="hidden" name="id" id="" value="<?php echo $row['id']?>">
			<input type="hidden" name="page" id="" value="<?php echo $_GET['page']?>">
			<input type="submit" value="提交">
			<input type="reset" value="重置">
		</form>
	</center>
</body>
</html>
