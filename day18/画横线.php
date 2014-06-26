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

//3、在画布上画图或文字
/*
画line
*/
imageline($im, 0, 0, 500, 300, $white);
imageline($im, 0, 150, 500, 150, $white);
imageline($im, 0, 300, 500, 0, $white);
imageline($im, 250, 0, 250, 300, $green);
imageline($im, 120, 250, 500, 150, $green);

//4、输出图像
header("content-type:image/png");

imagepng($im);

//释放画布资源
imagedestroy($im);




?>