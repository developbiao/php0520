<?php
	header("content-type:text/html; charset=utf-8");

	$score = 66;
	do {
		echo "<h3>你的成绩不及格！</h3>";
		$score ++;

	}while($score < 60);
	echo "<h3>{$score} </h3>";
?>