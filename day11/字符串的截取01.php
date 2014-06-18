<?php
/*
字符中的截取
*/

//字符串截取提取目录

$str = "PHP是一个很优秀的语言，在web上面用的很方便的脚本";

echo mb_substr($str, 0, 12, "utf-8");
?> 
