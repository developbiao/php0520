<?php
	header("Content-type:text/html; charset=utf-8");

	//静态变量
	static $var = 250; //全局的静态变量

	function show(){

		static $var; //函数里面的静态变量
		$var ++;
		echo "函数第${var}次被调用<br/>";

	}

	show();
	show();
	show();
	show();
	show();
	show();
	show();
	show();
	show();
	show();
	echo "{$var}<br/>";

?>