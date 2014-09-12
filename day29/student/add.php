<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html" charset="utf-8">
	<title>adduser</title>
	<style type="text/css">
		#tid{
			width:100px;
		}
		#sid{
			
			width:105px;
		}
	</style>
</head>
<body>
	<center>
		<h3>添加学员</h3>
		<form action="insert.php" method="post">
			学员&nbsp;:<input type="text" name="name" id="tid">
			<br/>
			班级:<select id="sid" name="cid">
					<option value=""> 选择班级</option>
					<?php
						mysql_connect("192.168.176.128:3306", "root", "123456");
						mysql_select_db("studentdb");
						$sql = "SELECT * FROM cls ORDER BY id";
						$result = mysql_query($sql);
						while($row = mysql_fetch_assoc($result)){
							echo "<option value='{$row['id']}'>{$row['name']}</option>";
						}
					?>
				</select>
			<br/>
			<input type="submit" value="提交">
			<input type="reset" value="重置">
		</form>
	</center>
</body>
</html>
