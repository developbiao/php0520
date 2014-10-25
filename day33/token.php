<?php
/*
@Describe:实现微信的接入
@Date:2014/10/25
*/
header("Content-type:text/html; charset=utf-8");
	//定义一个常量，存储token的
	define("TOKEN", "weixin");

	//判断不没有数据
	if(!$_GET['signature']){
		echo "没有接收到微信服务器发过来的数据!";
		exit;

	}

	//获取微信服务器GET请求的4个参数
	$signature = $_GET['signature'];
	$timestamp = $_GET['timestamp'];
	$nonce = $_GET['nonce'];
	$echostr = $_GET['echostr'];
	/*
	echo "<pre>";
		print_r($_GET);
	echo "</pre>";
	exit;
	*/
	//$signature = "889sf9sd9f";

	//定义一个数据，存储其中的3个参数,分别是timestamp, nonce 和token
	$tempArr = array($nonce, $timestamp, TOKEN);

	//讲行排序
	sort($tempArr, SORT_STRING);

	//将数组转换成字符串
	$tempStr = implode($tempArr);

	//进行sha1加密算法
	$tempStr = sha1($tempStr);

	//判断是否是来至微信服务器
	if($tempStr == $signature){
		echo "<h3 style='color:red'>来到微信消息:".$echostr."</h3>";
	}else{
		echo "非法的数据来源!";
	}

?>