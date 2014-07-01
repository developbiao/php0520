<?php
/*
@Describe:php文件目录统计
@Author:GongBiao
@Date:2014/07/01
*/
header("content-type:text/html; charset=utf-8");

echo "<h3>递归文件的目录</h3>";

function listdir($dirname){
	$ds = opendir($dirname);
	while($file = readdir($ds)){
		$path = $dirname . '/' . $file;
		if ($file != '.' && $file != '..'){
			if (is_dir($path)){
				echo "DIR:". $file. "<br>";
				listdir($path);
			}else{
				echo "FILE:" . $file. "<br>";	
			}
		}
	}
}

$dirname = "test";

listdir($dirname);

?>
