<?php
/*
 * @Describe:修改学员信息
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
$sql = "SELECT * FROM stu WHERE id={$_GET['id']}";
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);

?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html" charset="utf-8">
	<title>adduser</title>
	<style type="text/css">
		#sid{width:105px}
		#tname{width:100px}
	</style>
</head>
<body>
	<center>
		<h3>修改学员信息</h3>
		<form action="update.php" method="post">
		学员&nbsp;:<input type="text" name="name" id="tname" value="<?php echo $row['name']?>">
			<br/>
			班级:<select id="sid" name="sid">
				<option value=''>修改班级</option>
				<?php
					$conn = mysql_connect("192.168.176.128:3306", "root", "123456");
					mysql_select_db("studentdb");
					//从班级表里面取的数据
					$sql = "SELECT * FROM cls ORDER BY id";
					$result = mysql_query($sql); 
					while($rows = mysql_fetch_assoc($result)){
						//修改下拉选择的数据
						echo "<option value='{$rows['id']}'>{$rows['name']}</option>";
					}
					mysql_free_result($result);
					mysql_close($conn);
				?>

			</select>
			<br/>
			<input type="hidden" name="id" id="" value="<?php echo $_GET['id']?>">
			<input type="hidden" name="page" id="" value="<?php echo $_GET['page']?>">
			<input type="submit" value="提交">
			<input type="reset" value="重置">
		</form>
	</center>
</body>
</html>
