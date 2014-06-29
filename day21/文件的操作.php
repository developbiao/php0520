<?php
/*
@Describe:php文件操作
@Date:2014/06/29
@Author:GongBiao
*/
//文件的重命名

$filename = "haha.log";
//var_dump(rename($filename, "haha.log"));
//Copy文件

//var_dump(copy($filename, "test/copyfile.log")); //文件的Copy

//文件的删除

var_dump(unlink("a.txt"));



?>
