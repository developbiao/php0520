<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>rev</title>
</head>
<body>
	<?php
		print_r($_REQUREST);
	?>

	<!-- REQUEST-- >

	<h3>欢迎 <?php echo $_REQUEST['name']?></h3>
	<br/>
	<h3>姓名: <?php echo $_REQUEST['name']?></h3>
	<h3>年龄: <?php echo $_REQUEST['age']?></h3>
</body>
</html>