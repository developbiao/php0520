<?php
/*
@Describe:php画图函数
@Date:2014/06/26
@Author:GongBiao
*/

$im = imagecreatetruecolor(500, 300);

$white = imagecolorallocate($im,255, 255, 255);
$red = imagecolorallocate($im,255, 0, 0);
$green = imagecolorallocate($im,0, 255, 0);
$blue = imagecolorallocate($im, 0, 0, 255);
$gray = imagecolorallocate($im, 200, 200, 200);
$grayred = imagecolorallocate($im, 255, 100, 100);

//3、在画布上画图

$str = "php is very much!";

imagestring($im, 5, 200, 200, $str, $red);



header("content-type:image/png");

imagepng($im);

?>