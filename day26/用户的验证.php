<?php
/*
 * @Desicrbe:用户的验证
 * @Author:GongBiao
 * @Date:2014/07/04
 */
if(!isset($PHP_AUTH_USER)){
	header("WWW-Authenticate: Basic realm=My Realm");
	header("HTTP/1.0 401 Unauthorized");
	echo "Text to end if user hits Cancel buttonn";
	exit;
}else{
	if (!($PHP_AUTH_USER == "tnc" && $PHP_AUTH_PW == "nature")){
		//如果是错误的用户名称/密码对，强制再验证
		Header("WWW-Authenticate: Basic realm=My Realm");
		Header("HTTP/1.0 401 Unauthorized");
		echo "ERROR : $PHP_AUTH_USER/$PHP_AUTH_PW is invalid";
		exit;
	}else{
		echo "Welcome tnc!";
	}
}
?>
