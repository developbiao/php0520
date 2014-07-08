<?php
/*
 *@Describe:根据指定的验证信息核实用户身份
 *@Author:GongBiao
 *@Date:2014/07/04
 */
header("conten-teyp:text/html; charset=utf-8");
if (!isset($PHP_AUTH_USER)){
	header("WWW-Authenticate: Basic realm=My Private Stuff");
	header("HTTP/1.0 401 Unauthorized");
	echo 'Authorization Required';
	exit;
}else if(isset($PHP_AUTH_USER)){
	if (($PHP_AUTH_USER !='admin') || ($PHP_AUTH_PW != '123')){
		header('WWW-Authenticate: Basic realm = My Private Stuff');
		header('HTTP/1.0 401 Unauthorized');
		echo 'Authrization Required';
		exit;
	}
}else{
		echo "<p>You're authorized!</p>";
}
?>
