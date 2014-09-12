<?php
/*
@Discribe:PHP 目录操作函数
@Author:GongBiao
@Date:2014/07/02
*/

function deldir($dirname){
	$ds = opendir($dirname);	
	while($file = readdir($ds)){
		$path = $dirname. '/'. $file;
		if($file != '.' && $file != '..'){
			if (is_dir($path)){
				deldir($path);
			}else{
				unlink($path);
			}
		}
	}

	//删除目录资源
	closedir($ds);

	//删除目录
	return rmdir($dirname);
}

$dirname = "./test1";

var_dump(deldir($dirname));

?>

