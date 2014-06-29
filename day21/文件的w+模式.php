<?php
/*
 *@Descrie:文件的读取
 *@Author:GongBiao
 *@Date:2014/06/29
 */

$filename = "test/b.txt";
//w 模式下面是读不到的
$fs = fopen($filename, "w+");// w +很猛清除写
fwrite($fs, "123");
//rewind($fs);
$str = fread($fs, 10);
echo $str;
echo "<br/>";
echo "指针现在的位置是:". ftell($fs);

rewind($fs);
echo "<br/>";
echo "指针现在的位置是:". ftell($fs);



fclose($fs);
echo "<br/>";
echo "程序已执行！";

?>
