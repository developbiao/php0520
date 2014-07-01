<?php
/*
@Describe:php文件目录统计
@Author:GongBiao
@Date:2014/07/01
*/
header("content-type:text/html; charset=utf-8");

echo "<h3>统计目录文件的大小</h3>";


function totdir($dirname){

	static $tot;

	$ds = opendir($dirname);

	while($file = readdir($ds)){
		$path = $dirname . '/'. $file;
		if($file != '.' && $file != '..'){  //文件的过虑
			if(is_dir($path)){
				totdir($path);
			}else{
				$tot += filesize($path);
			}
		}
	}

	return $tot;
}

//调用统计函数
//echo _FILE_;
echo "<br/>";
$dirname = "../day21";  //目录的位置
$tot = totdir($dirname);

if($tot >= 100000){
	$tot /= 100000;
	echo "<h3>文件在大小是:{$tot}GB</h3>";
}
elseif($tot >= 10000){
	$tot /= 10000;
	echo "<h3>文件在大小是:{$tot}MB</h3>";

}
elseif ($tot >= 1000){
	$tot /= 1000;
	echo "<h3>文件在大小是:{$tot}KB</h3>";

	
}else{
echo "<h3>文件在大小是:{$tot}Bytes</h3>";
}



?>
