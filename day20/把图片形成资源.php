<?php
/*
@Describe:PHP图片缩放，裁剪和水印
@Author:GongBIao
@Date:2014/06/28
*/

//把一张已有的图形成资源

$im = imagecreatefromjpeg("jokey.jpg");

header("content-type:image/jpeg");

imagejpeg($im);
?>