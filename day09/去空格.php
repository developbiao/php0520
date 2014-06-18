<?php
/*
@Describe:去空格trim, ltrim, rtime
@Author:GongBiao
@Date:2014/06/16
*/
$name = "aaa       ";
echo strlen($name);
$name = trim($name);
echo "<br/>";
echo strlen($name);


?>