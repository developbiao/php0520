<?php
/*
@Describe:PHP图片缩放，裁剪和水印
@Author:GongBIao
@Date:2014/06/28
*/

//等比缩放图片

$imgfile = "dream.jpg";

//大图宽高
$imgarr = getimagesize($imgfile);

$maxw = $imgarr[0];
$maxh = $imgarr[1];
$maxt = $imgarr[2];
$maxm = $imgarr['mime'];

//大图资源
$maxim = imagecreatefromjpeg($imgfile);

//指定小图的大小
$minw = 50;
$minh = 50;

//等比缩放
if (($minw / $maxw) > ($minh / $maxh)){
	$bili = $minh / $maxh;
}else{
	$bili = $minw / $maxw;
}

//取整
$minw = floor($maxw * $bili);
$minh = floor($maxh * $bili);

//小图资源
$minim = imagecreatetruecolor($minw, $minh);

//把大图缩放成小图
imagecopyresampled($minim, $maxim, 0, 0, 0, 0, $minw, $minh, $maxw, $maxh);

//把小图输出

header("content-type:{$maxm}");

//imagejpeg($minim);    //把缩放的小图输出

//判断类型


switch($maxt){
	case 1:
		$imgout = "imagegif";
		break;
	case 2:
		$imgout = "imagejpeg";
		break;
	case 3:
		$imgout = "imagepng";
		break;

}
//输出小图的变量函数的类型
$imgout($minim);  //输出到浏览器
$minfilename = "s_". $imgfile;
//$imgout($maxim, $minfilename);   // 变量函数保存图片

//释放资源

imagedestroy($maxim);
imagedestroy($minim);


?>