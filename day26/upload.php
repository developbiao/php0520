<?php
	header("Content-type:text/html; charset=utf-8");
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";

	//�õ��ļ�����
	$tmpfile = $_FILE['file']['tmp_name'];
	$filetype = array_shift(explode('/',$_FILE['file']['type']));

	//�õ��ļ���׺
	$fname = $_FILES['file']['name'];
	$fileext = array_pop(explode('.', $fname));

	//�ļ��ϴ���Ŀ¼
	if ($filetype == 'image'){
		$dsfile = 'uplods/imgs' . time() . '_' . mt_rand() . '.' . $fileext;
	}else{
		$dsfile = 'uplods/files' . time() . '_' . mt_rand() . '.' . $fileext;
	}

	//�����ļ�����
	$filearr = array("rar", "zip", "jpeg", "gif", "png");

	//�����ļ���С
	$filesize = $_FILES['file']['size'];

	if (in_array($fileext, $filearr)){
		if ($filesize <= 3032){
			if (move_uploaded_file($tmpfile, $dstfile)){
				echo "�ļ��ϴ��ɹ���";
			}else{
				echo "�ļ��ϴ�ʧ��!";
			}
		}
	}else{
		echo "�ļ����Ͳ���֧��!";
	}
?>
	
	
