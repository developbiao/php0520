<?php
/*
@Describe:php画图函数
@Date:2014/06/26
@Author:GongBiao
*/

//1、准备画布资源
$im = imagecreatetruecolor(500,300);

//2、准备涂料
$white = imagecolorallocate($im , 255, 255, 255);
$green = imagecolorallocate($im , 0, 255, 0);
$red = imagecolorallocate($im, 255, 0, 0);
$blue = imagecolorallocate($im, 0, 0, 255);

//3、在画布上画图或文字

//画pixel像素点
imagesetpixel($im, 250, 150, $white);
imagesetpixel($im, 200, 100, $green);
imagesetpixel($im, 250, 158, $red);
imagesetpixel($im, 200, 21, $blue);

//4、输出图像
header("content-type:image/png");

imagepng($im);

//释放画布资源
imagedestroy($im);




?>