<?php
/*
@Date:2014/06/21
@Author:GongBiao
@Describe:正则表达式的学习
*/


	header("Content-type:text/html; charset=utf-8");

	$sub = "php is veryveryveryveryveryveryvery much";

	$ptn = '/(very){2,3}/';   //2个为一组向后匹配

	$rep = 'Good';

	echo preg_replace($ptn, $rep, $sub);


?>