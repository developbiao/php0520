<?php
/*
 *@Describe:php常用文件读写函数
 *@Author:GongBiao
 *@Date:2014/06/30
 */

header("Content-Type:text/html; charset=utf-8");

$filename = "test/b.txt";

//三个字节的循环读取

$fs = fopen($filename, "r");

//while的方法
//while($str = fread($fs, 3)){
//	echo $str. "<hr>";
//}
//

//第二种方法循环读取

while(!feof($fs)){ //以指针的方法判断
	$str = fread($fs, 2);
	echo $str;
}




fclose($fs);



?>
