<?php
/*
@Describe:PHP GD画图
@Author:GongBIao
@Date:2014/06/24
*/

//准备画布
$im = imagecreatetruecolor(500, 300);

//准备涂料
$black = imagecolorallocate($im ,0,0,0);
$blue = imagecolorallocate($im,0, 0, 255);


//背景填充成blue
imagefill($im, 0, 0, $blue);

//圆形并填充成蓝色
imagefilledellipse($im, 200, 151, 200, 200, $blue);

//输出到浏览器上或保存起来
header("content-type:image/png");
imagepng($im);

//关闭画布
imagedestroy($im);

?>