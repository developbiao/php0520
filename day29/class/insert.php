<?php
//页面字符集
header("content-type:text/html; charset=utf-8");

//通过PHP连接mysql数据库:
$conn = @mysql_connect("192.168.176.128:3306", "root", "123456");

//选择数据库
mysql_select_db("studentdb");

//设置客户端字符集
mysql_query("set names utf8");

//POST数组
$name = $_POST['name'];

if($password == $repassword){
// 准备sql语句
	$sql= "INSERT INTO cls(name) VALUES('${name}')";
	if(mysql_query($sql)){
		echo "<script>alert('添加成功!')</script>";
		echo "<script>location='index.php'</script>";
	}else{
		echo "<script>alert('添加失败!')</script>";
		echo "<script>location='add.php'</script>";
	}
	
}else{
	echo "<script>alert('两次密码不一致')</script>";
	echo "<script>location='add.php'</script>";
}


?>
