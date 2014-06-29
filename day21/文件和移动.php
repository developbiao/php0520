<?php
/*
 *@Descrie:文件的读取
 *@Author:GongBiao
 *@Date:2014/06/29
 */

//文件的移动

header("content-type:text/html; charset=utf-8");

$filename = "haha.log";
copy($filename, "test/haha.log");
if (unlink($filename)){
	echo "<h3>文件移动成功!</h3>";
}else{
	echo "<h3>移动文件失败!</h3>";
}


?>
