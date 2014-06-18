<?php
	header("content-type:text/html; charset=utf-8");

	//jiu jiu table
	for ($i = 1; $i <= 9; $i ++){
		for ($j = 1; $j <= $i; $j++){
			echo "$i * $j = ".($j * $i);
			echo "   ";
		}

		echo "<br/>";
	}
?>