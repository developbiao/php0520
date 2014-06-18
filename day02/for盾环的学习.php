<?php
	echo "everyting is ok !";
	$var = 99;
	$red = "red";
	$yellow = "green";
	for ($var = 1; $var <= 99; $var ++){
		if ($var %2)
			echo "<h3 style='color:${red}'> I LOVE YOU SHPAREK IN:{$var}</h3>";
		else
			echo "<h3 style='color:${green}'> I LOVE YOU SHPAREK IN:{$var}</h3>";

	}
?>