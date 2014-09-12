<?php
//页面字符集
header("content-type:text/html; charset=utf-8");

//通过PHP连接mysql数据库
$conn = @mysql_connect("192.168.176.128:3306", "root", "123456");

//选择数据库
mysql_select_db("studentdb");

//设置客户端字符集
mysql_query("set names utf8");

//修改表单发来的数据
$cid = $_POST['sid'];   //班级id
$id = $_POST['id'];    //学生id
$name = $_POST['name'];  //姓名
$pagenum = $_POST['page'];  //记住页码

/*
echo $cid;
echo ":";
echo $id;
echo ":";
echo $name;
exit;
 */
 
 


//准备sql 语句
//echo "her!";
$sql = "UPDATE stu SET name='{$name}', cid=$cid WHERE id=$id";

//执行sql
$result = mysql_query($sql);

if($result){
	echo "<script>alert('修改成功!');</script>";
	echo "<script>location='index.php?page={$pagenum}'</script>";
}else{
	echo "<script>alert('修改失败!');</script>";
	echo "<script>location='edit.php'</script>";
}
?>

