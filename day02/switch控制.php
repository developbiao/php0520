<?php
	header("content-type:text/html; charset=utf-8");
	$day = date("w");
	echo $day;

	switch($day){
		case 0 : echo "<h3 style='color:green'>星期天 </h3>";
			break;
		case 1 : echo "<h3 style='color:#ABCDEF'>星期一 </h3>";
			break;
		case 2 : echo "<h3>星期二</h3>";
		case 3 : echo "<h3> 星期三</h3>";
		case 4 : echo "<h3> 星期四</h3>";
		case 6 : echo "<h3> 星期五</h3>";
		case 5 : echo "<h3> 星期六</h3>";
	}
?>