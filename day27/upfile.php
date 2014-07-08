<?php
/*
 * @Describe:多文件下载
 * @Author:GongBiao
 * @Date:2014/07/05
 */
header("content-type:text/html; charset=utf-8");

$dirname = "uploads/imgs";

function listdir($dirname){
	$ds = opendir($dirname);
	while($file = readdir($ds)){
		$path = $dirname . '/' . $file;
		if($file != '.' && $file!= '..'){
			if(is_dir($path)){
				listdir($path);
			}else{
				echo "<tr>";
				echo "<td><img src= '$path'</td>";
				echo "<td><a href='down.php?imgpath=$file'>下载</a></td>";
				echo "</tr>";
			}
		}
	}
}

echo "<h3>图片下载</h3>";
echo "<table width='700px' border='1px'>";
listdir($dirname);
echo "</table>";
echo "<h3><a href='index.php'>上传文件</a></h3>";
?>
