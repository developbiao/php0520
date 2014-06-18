<?php
// 注意header的前面不能有空白，不好排错
	header("content-type:text/html;charset=utf-8");
	//定义一个对象
	class Person(){
		function say(){
			echo "<h1>我正在学习.</h1>";

		}

		function eat(){
			echo "<h1>我正在在吃,别理我!</h1>"
		}

		function sleep(){
			echo "<h1>我正在睡觉.</h1>"
		}

		function run(){
			echo "<h1>我正在走路.</h1>";
		}
	}

	$user1 = new Person();
	$user1->say();
	$user1->eat();
	$user1->run();
?>