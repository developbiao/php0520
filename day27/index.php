<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="gbk">
	<title>文件上传</title>
</head>
<body>
	<h2>文件上传</h2>
	<hr>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="file[]" id="">
		<br/>
		<input type="file" name="file[]" id="">
		<br/>
		<input type="file" name="file[]" id="">
		<br/>
		<input type="submit" value="上传">

	</form>
</body>
</html>
