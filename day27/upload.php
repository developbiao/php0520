<?php
	header("Content-type:text/html; charset=utf-8");
	echo "<pre>";
	print_r($_FILES);
	echo "<pre>";

	//有几个文件就上传几个文件
	
	$files = count($_FILES['file']['name']);
	echo $files;

	//多文件上传
	for($i = 0; $i < $files; $i++){
		$tmpfile = $_FILES['file']['tmp_name'][$i];
		$dstfile = 'uploads/imgs/' . $_FILES['file']['name'][$i];
		move_uploaded_file($tmpfile, $dstfile);
	}

	echo "<h3>up loading is ok !</h3>";
?>
