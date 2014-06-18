<!DOCTYPE HTML>
<!-- 
@Describe:file  文件上传
@Author:GongBiao
@Date:2014/06/12

-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>file demo</title>
</head>	
<body>
<!--  文件上传 enctype:multipart/form-data-->
	<h1>文件上传</h1>
	<form action="rev.php" method="post" enctype="multipart/form-data">
		文件上传:<input type="file" name="file"  id="" />
		<br/>
		<input type="submit" value="提交" />
	</form>
</body>
</html>

