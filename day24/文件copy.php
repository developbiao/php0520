<?php
/*
@Discribe:PHP 目录操作函数
@Author:GongBiao
@Date:2014/07/02
*/
header("content-type:text/html; charset=utf-8");
//文件的递归复制


$srcdir = "test1";
$dstdir = "test3";

function copydir($srcdir, $dstdir){
	mkdir($dstdir);
	$ds = opendir($srcdir);

	while($file = readdir($ds)){
		$path = $srcdir . '/' . $file;
		$dstpath = $dstdir . '/' . $file;
		if ($file != '..' && $file != '.'){
			if (is_dir($path)){
				copydir($path, $dstpath);
			}else{
				copy($path, $dstpath);
			}
		}
	}
	//删除目录资源
	closedir($ds);
}

echo "<h3>文件目录的复制</h3>";

copydir($srcdir, $dstdir);


?>

