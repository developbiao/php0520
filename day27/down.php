<?php
/*
 * @Describe:����
 * @Author:GongBiao
 * @Date:2014/07/05
 */
$imgfile = $_GET['imgpath'];

//echo $imgfile;
$path = "uploads/imgs/" . $imgfile;
$imgsize = filesize($path);

//�����ļ�
//header("content-type:image/png");
header("content-type:application/octet-stream"); //application/octet-stream
header("content-disposition:attachement;filename={$imgfile}");
header("content-length:{$imgsize}");
readfile($path);

?>
