<?php 
//开户session
session_start();

$img=imagecreatetruecolor(50,30);

$black=imagecolorallocate($img,0,0,0);
$white=imagecolorallocate($img,255,255,255);

imagefill($img,0,0,$black);

//随机的四位字符串
$arr=array_merge(range(0,9),range(a,z),range(A,Z));
shuffle($arr);
$str=join('',array_slice($arr,0,4));

$_SESSION['vcode']=$str;

imagettftext($img,12,0,2,23,$white,'msyhbd.ttf',$str);

header('content-type:image/jpeg');

imagejpeg($img);
 ?>