<?php
/*
@Describe:PHP图片缩放，裁剪和水印
@Author:GongBIao
@Date:2014/06/28
*/
//图片加水印

//大图的资源
$maxim = imagecreatefromjpeg("./jokey.jpg");

//小图的资源
$minim = imagecreatefrompng("./logo.png");

//获取各自的with height
$maxw = imagesx($maxim);
$maxh = imagesy($maxim);

$minw = imagesx($minim);
$minh = imagesy($minim);

//打水印
imagecopy($maxim, $minim, $maxw - $minw, $maxh - $minh, 0, 0, $minw, $minh);

//输入图片
header("content-type:image/jpeg");
imagejpeg($maxim);


?>
