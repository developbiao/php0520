<?php
	header("Content-type:text/html; charset=utf-8");
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";

	//得到文件类型
	$tmpfile = $_FILES['file']['tmp_name'];
	$filetype = array_shift(explode('/', $_FILES['file']['type']));
	//echo $filetype;

	//得到文件后缀
	$fname = $_FILES['file']['name'];
	$fileext = array_pop(explode('.', $fname));


	//文件上传到目录
	if ($filetype == 'image'){
		$dstfile = 'uploads/imgs/' . time() . '_' . mt_rand() . '.' . $fileext;
	}else{
		$dstfile = 'uploads/files/' . time() . '_' . mt_rand() . '.'. $fileext;
	}


	//允许文件类型
	$filearr =  array("jpg", "png", "rar", "zip", "exe");


	//限制文件大小
	$filesize = $_FILES['file']['size'];

	if (in_array($fileext, $filearr)){
		if ($filesize <= 20480){
		if (move_uploaded_file($tmpfile, $dstfile)){
			echo "<h3>uploads is succeful!</h3>";
		}else{
			echo "<h3>file uploads discar!</h3>";
		}
		}else{
			echo "<h3>文件大小超过20KB</h3>";
		}
	}else{
		echo "<h3>file type not!~</h3>";
	}

	
?>
