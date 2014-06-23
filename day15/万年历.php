<?php
/*
@Describe:日期函数的学习
@Author:GongBiao
@Date:2014/06/23
*/
	//修改页面编码
	header("Content-Type:text/html; charset=utf-8");

	//获取当前年

	$year = $_GET['y'] ? $_GET['y'] : date('Y');

	//获取当前月
	$month = $_GET['m'] ? $_GET['m'] : date('m');

	//获取当前月有少天
	$days = date('t', strtotime("{$year}-{$month}-1"));

	//当前一号是周几

	$week = date('w', strtotime("{$year}-{$month}-1"));

	//echo $week;


	echo "<center>";
	//输入表头

	echo "<h3>{$year}年{$month}月</h3>";

	//输出日期表格
	echo "<table width='700px' border='2px'>";

	echo "<tr>";
	echo "<th>星期日</th>";
	echo "<th>星期一</th>";
	echo "<th>星期二</th>";
	echo "<th>星期三</th>";
	echo "<th>星期四</th>";
	echo "<th>星期五</th>";
	echo "<th>星期六</th>";
	echo "</tr>";

	//铺表格

	for ($i = 1 - $week; $i  < $days;) {   //1-week可以算出星期
		echo "<tr>";
			for ($j = 0; $j < 7; $j++){

				if ($i > $days || $i < 1){
					echo "<td>&nbsp;</td>";
				}else{

				echo "<td>{$i}</td>";
			}
				$i++;
			}
		echo "</tr>";
	}

	echo "</table>";


	//输出上一月和下一月的按包钮

	//prev

	if ($month ==1){
		$prevyear = $year  - 1;
		$prevmonth = 12;
	}else{
		$prevyear = $year;
		$prevmonth = $month -1;
	}
	//next

	if ($month == 12){
		$nextyear = $year + 1;
		$nextmonth = 1;
	}else{
		$nextyear = $year;
		$nextmonth = $month + 1;
	}

	echo "<br/>";
	echo "<br/>";
	echo "<a href='index.php?y={$prevyear}&m={$prevmonth}'> 上一月</a>  |  <a href='index.php?y={$nextyear}&m={$nextmonth}'> 下一月</a>";
	echo "<form action='index.php' mthod='GET'>";


	/*
	现在这里换在button还不知道怎么用php处理

	@Date:2014/06/23
	*/
	echo "<input type=button value=上一月 />";
	echo "&nbsp;&nbsp;&nbsp;";
	echo "<input type=button value=下一月 />";
	echo "</form>";

	echo "</center>";


?>