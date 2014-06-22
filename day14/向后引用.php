<?php
	header("Content-Type:text/html; charset=utf-8");

	$string = 'April 15, 2003';
	$parttern = '/(\w+)(\s+)(\d+), (\d+)/i';
	$replacement = '${1}1,$4';

	echo preg_replace($parttern, $replacement, $string);

?>