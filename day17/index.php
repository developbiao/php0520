<?php
/*
php画图
*/
//1.准备画布资源
$im = imagecreatetruecolor(500, 300);

//准备涂料
$black = imagecolorallocate($im, 0, 0, 0);
$white = imagecolorallocate($im, 255, 255, 255);

//3. 在画布上画图或文字
//imageellipse($im, 258, 151, 200, 200, $white);
imagefilledellipse($im, 258, 151, 200, 200, $white);

//4.输出最终图像或保存最终图像
header("content-type:image/png");
imagepng($im);


?>