<?php
/*
@Descrite:脚本处理
*/
	header("content-type:text/html; charset=utf-8");

	echo "<h3>Game overy!</h3>";
	//exit();
	die("i my die..");

	//下面的代码不会执行

	$score = 66;
	do {
		echo "<h3>你的成绩不及格！</h3>";
		$score ++;

	}while($score < 60);
	echo "<h3>{$score} </h3>";
?>