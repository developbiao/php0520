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

//imagefilledarc($im, 258, 130, 200, 200, 90, 180, $green, IMG_ARC_PIE);

//3D graph

for ($i = 0; $i < 10; $i++){
	imagefilledarc($im, 258, 151 + $i, 200, 200, 0, 70, $gray, IMG_ARC_PIE);	
	imagefilledarc($im, 258, 151 + $i, 200, 200, 70, 190, $grayred, IMG_ARC_PIE);	
	imagefilledarc($im, 258, 151 + $i, 200, 200, 190, 270, $green, IMG_ARC_PIE);	
	imagefilledarc($im, 258, 151 + $i, 200, 200, 270, 360, $blue, IMG_ARC_PIE);	
}


imagefilledarc($im, 258, 151, 200, 200, 0, 70, $white, IMG_ARC_PIE);
imagefilledarc($im, 258, 151, 200, 200, 70,  190, $red, IMG_ARC_PIE);
imagefilledarc($im, 258, 151, 200, 200, 190, 270, $green, IMG_ARC_PIE);
imagefilledarc($im, 258, 151, 200, 200, 270, 360, $blue, IMG_ARC_PIE);




header("content-type:image/png");

imagepng($im);

?>