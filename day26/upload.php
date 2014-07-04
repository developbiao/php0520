<?php
	header("Content-type:text/html; charset=utf-8");
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";

	//得到文件类型
	$tmpfile = $_FILE['file']['tmp_name'];
	$filetype = array_shift(explode('/',$_FILE['file']['type']));

	//得到文件后缀
	$fname = $_FILES['file']['name'];
	$fileext = array_pop(explode('.', $fname));

	//文件上传到目录
	if ($filetype == 'image'){
		$dsfile = 'uplods/imgs' . time() . '_' . mt_rand() . '.' . $fileext;
	}else{
		$dsfile = 'uplods/files' . time() . '_' . mt_rand() . '.' . $fileext;
	}

	//允许文件类型
	$filearr = array("rar", "zip", "jpeg", "gif", "png");

	//限制文件大小
	$filesize = $_FILES['file']['size'];

	if (in_array($fileext, $filearr)){
		if ($filesize <= 3032){
			if (move_uploaded_file($tmpfile, $dstfile)){
				echo "文件上传成功！";
			}else{
				echo "文件上传失败!";
			}
		}
	}else{
		echo "文件类型不被支持!";
	}
?>
	
	
