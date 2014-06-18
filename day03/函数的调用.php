<?php
/*
@Describe:九九乘法表的练习
@Author:GongBiao
@Date:2014/06/09
*/
	header("content-type:text/html; charset=utf-8");

	function jiutab($num = 9, $color = "black"){

		for ($i = 1; $i <= $num; $i ++){

			for ($j = 1; $j <= $i; $j++){

				echo "<font color='{$color}'>{$i} * {$j} =  ".($i * $j)."</font>";
				echo "  ";

			}
				echo "<br/>";
		}

		echo "<hr/>";

	}

	//fucntion 调用
	jiutab(7);
	jiutab(3, "#00ff00");
	jiutab(2, "#0000ff");

	//defalut 调用
	jiutab();
?>