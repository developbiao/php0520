<?php
	header("Content-Type:text/html; charset=utf-8");

	$string = 'The quick brown fox jumped over the lazy dog.';
	$patterns = array();
	$patterns [0] = '/quick/';
	$patterns[1] = '/brown/';
	$patterns[2] = '/fox/';

	$replacements = array();
	$replacements  [2] = 'bear';
	$replacements  [1] = 'black';
	$replacements  [0] = 'slow';

	/*
	好的解决顺序的方法
	*/
	//$replacements = array(
	//	'cat',
	//	'black',
	//	'slow'
	//	); 


	ksort($patterns);
	ksort($replacements);



	echo preg_replace($patterns , $replacements, $string);

?>