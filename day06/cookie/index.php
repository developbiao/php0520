<?php
	setcookie("name", "gongbiao", time() + 3600, "/");

	echo "<pre>";
	print_r($_COOKIE);
	echo "</pre>";
?>