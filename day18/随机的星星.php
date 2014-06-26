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

$arr = array();
$arr[] = $green;
$arr[] = $white;
$arr[] = $red;
$arr[] = $blue;

//随机着色
$rkey = mt_rand(0, count($arr) - 1);


//3、在画布上画图或文字

//随机星星
for ($i = 0; $i < 1000; $i++){
	imagesetpixel($im, mt_rand(0, 500), mt_rand(0, 300), $arr[$rkey]);
}

//画line
for ($j = 0; $j < 20; $j++){
	imageline($im, mt_rand(0,500), mt_rand(0,300), mt_rand(0, 500), mt_rand(0, 300) ,$arr[$rkey]);
}

//4、输出图像
header("content-type:image/png");

imagepng($im);

//释放画布资源
imagedestroy($im);


?>