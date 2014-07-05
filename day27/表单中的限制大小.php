<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="gbk">
	<title>文件上传</title>
<head>
<body>
	<h2>文件上传</h2>
	<hr/>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<!-- input hidden MAX_FILE_SIZE 卡的是文件大小 -->
		<input type="hidden" name="MAX_FILE_SIZE" value="2048">
		<input type="file" name="file" id="">
		<br>
		<br>
		<input type="submit" value="上传">
	</form>
</body>
</html>
