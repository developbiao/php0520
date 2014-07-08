<?php
	header("content-type:text/html; charset=utf-8");
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";

	$tmpfile = $_FILES['file']['tmp_name'];
	$dstfile = "uploads/imgs/" . $_FILES['file']['name'];

	if (move_uploaded_file($tmpfile, $dstfile)){
		echo "<h3>文件上传成功!</h3>";
	}else{
		echo "<h3>文件上传失败!</h3>";
	}
?>
