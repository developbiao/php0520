<?php
	header("Content-type:text/html; charset=utf-8");
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";

	//�õ��ļ�����
	$tmpfile = $_FILES['file']['tmp_name'];
	$filetype = array_shift(explode('/', $_FILES['file']['type']));
	//echo $filetype;

	//�õ��ļ���׺
	$fname = $_FILES['file']['name'];
	$fileext = array_pop(explode('.', $fname));


	//�ļ��ϴ���Ŀ¼
	if ($filetype == 'image'){
		$dstfile = 'uploads/imgs/' . time() . '_' . mt_rand() . '.' . $fileext;
	}else{
		$dstfile = 'uploads/files/' . time() . '_' . mt_rand() . '.'. $fileext;
	}


	//�����ļ�����
	$filearr =  array("jpg", "png", "rar", "zip", "exe");


	//�����ļ���С
	$filesize = $_FILES['file']['size'];

	if (in_array($fileext, $filearr)){
		if ($filesize <= 20480){
		if (move_uploaded_file($tmpfile, $dstfile)){
			echo "<h3>uploads is succeful!</h3>";
		}else{
			echo "<h3>file uploads discar!</h3>";
		}
		}else{
			echo "<h3>�ļ���С����20KB</h3>";
		}
	}else{
		echo "<h3>file type not!~</h3>";
	}

	
?>
