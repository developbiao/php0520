<?php
/*
@Descrition:define的练习使用
@Author:GongBiao
@Date:2014/06/07
*/

header("content-type:text/html; charset=utf-8");
include(config.inc.php);
//注意分号非常的重要
echo "is ok ";
echo "<h3>";
echo "HOST:".USER;
echo "</h3>";

echo "<h3>";
echo "MYSQL:".HOST;
echo "</h3>";


echo "<h3>";
echo "DATABASES:".DBNAME;
echo "</h3>";
?>