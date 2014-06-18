<?php
header("content-type:text/html; charset=utf-8");
//Array demo1
//$arr = array("user1", "admin", "root", "biaoge", "gongbiao");
//echo "login:{$arr[4]}";

//自定义数组的索引
$arr = array("user1" => "gongbiao", "user2" => "root", "user3" => "mnitor");
echo "user:{$arr[user2]}";
?>