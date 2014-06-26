<?php
/*
@Describe:php画图函数
@Date:2014/06/26
*/

//1、准备画布资源
$im = imagecreatetruecolor(500, 300);
//$im = imagecreateturcolor(500, 300);

//2、准备涂料
$black = imagecolorallocate($im, 0, 0, 0);
$white = imagecolorallocate($im, 255, 255, 255);
$red = imagecolorallocate($im, 255, 255, 0);
$blue = imagecolorallocate($im, 0, 0, 255);

//3、在画布上画图像或文字
//imagefill($im, 0, 0, $white); //如果不写，背景默认是黑色
imagefill($im, 0, 0, $white);
imagefilledellipse($im ,258, 151, 200, 200, $blue);

//4、输出最终的图像或保存最终图像
header("content-type:image/png");
imagepng($im);

//如果输出到本地
//imagepng($im ,"yuan.png");

//5、释放画布资源
imagedestroy($im);

?>