<?php
/*
@Describe:php验证码生成
@Date:2014/06/27
@Author:GongBiao
*/
//header("content-type:text/html; charset=utf-8");

/*
该页面生成验证图片
*/

//开启session
session_start();


//准备画布资源
$im =imagecreatetruecolor(100, 50);

//准备涂料
$black = imagecolorallocate($im , 0, 0, 0);
$gray = imagecolorallocate($im, 200, 200, 200);

//背景填充
imagefill($im, 0, 0, $gray);

//文字坐标
$x = (100 - 20 * 4) / 2;
$y = (50 - 20) / 2 + 20;

//准备文字
$strarr = array_merge(range(0, 9), range(a, z), range(A, Z));
shuffle($strarr);
$str = join('', array_slice($strarr, 0, 4));

//把$str放到session中方便页面使用
$_SESSION['vstr'] = $str;

$file = "fonts/msyh.ttc";
imagettftext($im, 20, 0, $x, $y, $black, $file, $str);

//输出最终图像或保存最终图像
header("content-type:image/png");

imagepng($im);

//释放画布资源
imagedestroy($im);
?>