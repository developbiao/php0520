<?php 

//图片缩放函数
function thumb($pic,$smx,$smy){
	//判断图片的后缀

	$arr=getimagesize($pic);
	$path=pathinfo($pic);

	switch ($arr[2]) {
		case 1:
			$imgext="gif";
			$imgcreate="imagecreatefromgif";
			$imgout="imagegif";
			break;
		case 2:
			$imgext="jpg";
			$imgcreate="imagecreatefromjpeg";
			$imgout="imagejpeg";
			break;
		case 3:
			$imgext="png";
			$imgcreate="imagecreatefrompng";
			$imgout="imagepng";
			break;
	}

	$lg=$imgcreate($pic);

	$lgx=$arr[0];
	$lgy=$arr[1];

	//缩放比例
	if($lgx/$smx>$lgy/$smy){
		$b=$lgx/$smx;
	}else{
		$b=$lgy/$smy;
	}

	$smx=floor($lgx/$b);
	$smy=floor($lgy/$b);

	$sm=imagecreatetruecolor($smx,$smy);

	imagecopyresampled($sm,$lg,0,0,0,0,$smx,$smy,$lgx,$lgy);

	$imgout($sm,$path['dirname'].'/th_'.$path['basename']);
}


//图片上传函数
function upload($dir){
	$tmpname=$_FILES['pic']['tmp_name'];
	$srcname=$_FILES['pic']['name'];
	$picsize=$_FILES['pic']['size'];

	$picext=array_pop(explode('.',$srcname));
	//中文名称上传会有问题
	$picname=time().mt_rand().'.'.$picext;
	//文件后缀
	$allowext=array('jpg','png','gif');
	//被允许的文件后缀 

	if($_FILES['pic']['error']===0){

		if(in_array($picext,$allowext)){
		
			if(move_uploaded_file($tmpname,$dir.'/'.$picname)){
				return $picname;
			}else{
				return false;
			}

		}else{
			return false;
		}

	}else{
		return false;
	}
}
 ?>