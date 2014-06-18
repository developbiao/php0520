<?php
	header("content-type:text/html; charset=utf-8");
	//查看上传文件信息
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";
?>