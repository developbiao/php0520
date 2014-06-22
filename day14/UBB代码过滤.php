<?php
	header("Content-Type:text/html; charset=utf-8");

	echo "<h3>UBB代码的过滤</h3>";

	$str = "[b]河马要加油[/b][i]梦想一定会实现的！[/i][img]./hehe.JPG[/img]";
	$ptn = array(
		'/\[b\]\[\/b\]/',
		'/\[i\](.+)\[\/i\]/',
		'/\[img\](.+)\[\/img\]/'
		);
	$rep = array(
		'<b>$1</b>',
		'<i>$1</i>',
		'<img src="$1">'
		);

	$str2 = preg_replace($ptn, $rep, $str);   //正则数组的匹配

	echo "<pre>";
	print_r($str2);
	echo "</pre>";


?>