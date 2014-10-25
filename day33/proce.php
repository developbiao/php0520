<?php
/*
@Describe:对数据处理加密
@Date:2014/10/25
*/
define("TOKEN", "weixin");

$timestamp = $_GET['timestamp'];
$nonce = $_GET['nonce'];
$echostr = $_GET['echostr'];

//定义一个数组
$tempArr = array($nonce, $timestamp, TOKEN);

//进行排序
sort($tempArr, SORT_STRING);

//将数组转换成字符串
$tempStr = implode($tempArr);

//进行加密
$tempStr = sha1($tempStr);


//转发数据
echo "<script>location='token.php?timestamp={$timestamp}&nonce={$nonce}&echostr={$echostr}&signature={$tempStr}'</script>";

?>