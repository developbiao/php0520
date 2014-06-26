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

$arr = array(
	250, 20,
	100, 200,
	23, 45,
	77,21
		);
$arr2 = array(
	77, 33,
	21, 78,
	100, 250
		);

imagepolygon($im, $arr, 4, $red);
imagefilledpolygon($im, $arr2, 3, $green);


header("content-type:image/png");

imagepng($im);

?>