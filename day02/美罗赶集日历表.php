<?php
/*
@Describe:php talbe日历
@Author:GongBiao
@Date:2014/06/08
*/

header("content-type:text/html; charset=utf-8");
$day = 31;
$key = 0;
echo "<h3>美罗街上赶集的日历表</h3>";
echo "<table width='700px' border='1px'>";
for ($i = 1; $i <= $day;){
	if ($key%2){
		echo "<tr bgcolor='#CCC'>";
	}
	else
		echo "<tr>";
	for ($j = 0; $j < 7; $j++){
		if ($i > $day)
			echo "<td>&nbsp;";
		else{
			if ($i % 3 == 0)
			{
				echo "<td bgcolor='red'>$i";
			}
			else{

				echo "<td>$i";

			}
		}
		echo "</td>";
		$i ++;

	}
	echo "</tr>";

		//key value auto 
	$key ++;

}
echo "<table>";

?>