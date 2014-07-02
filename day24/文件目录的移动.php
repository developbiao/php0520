<?php
/*
@Discribe:PHP 目录操作函数
@Author:GongBiao
@Date:2014/07/02
*/
header("content-type:text/html; charset=utf-8");

//文件目录的移动
//思路先copy后删除

$srcdir = "test3";
$dstdir = "test8";

function movedir($srcdir, $dstdir){
	mkdir($dstdir);
	$ds = opendir($srcdir);

	while($file = readdir($ds)){
		$path = $srcdir . '/' . $file;
		$dstpath = $dstdir . '/' . $file;

		if ($file != '.' && $file != '..'){
			if (is_dir($path)){
				movedir($path, $dstpath);
			}else{
				copy($path, $dstpath);
				unlink($path);
			}
		}
	}

	//关闭资源
	closedir($ds);

	//删除源目录
	rmdir($srcdir);
}

//调用函数
movedir($srcdir, $dstdir);

echo "file Program runing is ok !";

?>

