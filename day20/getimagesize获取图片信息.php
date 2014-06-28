<?php
/*
@Describe:PHP图片缩放，裁剪和水印
@Author:GongBIao
@Date:2014/06/28
*/

$imgfile = "jokey.jpg";  //图片的路径

//输出图片的坐标的第二种方法

$imgarr = getimagesize($imgfile);

echo "<pre>";
print_r($imgarr);
echo "</pre>";


?>