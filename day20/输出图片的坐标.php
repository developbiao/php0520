<?php
/*
@Describe:PHP图片缩放，裁剪和水印
@Author:GongBIao
@Date:2014/06/28
*/

$im = imagecreatefromjpeg("jokey.jpg");

//输出图片的坐标

$x = imagesx($im);
$y = imagesy($im);

echo "x:$x<br/>";
echo "y:$y<br/>";

?>