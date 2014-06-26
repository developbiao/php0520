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

//3、在画布上画图
imagerectangle($im, 100, 110, 418, 213, $green);
imagefilledrectangle($im, 200, 50, 231, 110, $red);


header("content-type:image/png");

imagepng($im);

?>