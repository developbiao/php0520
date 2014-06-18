<?php
/*
@Describe: array自然排序
@Date:2014/06/14
@Author:GongBiao
*/
header("content-type:text/html; charset=utf-8");

$pics = array("image1.gif", "IMAGE9.gif","image2.gif", "image7.gif","image4.jpg");

//natsort($pics);
natcasesort($pics);

echo "<pre>";
print_r($pics);
echo "</pre>";



?>