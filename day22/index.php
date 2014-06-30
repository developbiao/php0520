<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html"; charset="utf-8">
	<title>messge</title>
</head>
<body>
<h2>文件留言板</h2>
<hr>
<form action="rev.php" method="post">
<h2>请留言:</h2>
<textarea name="mname" id="" cols="50" rows="5">
</textarea>
<br>
<input type="submit" value="send">
</form>
<h2>看留言</h2>
<?php
	//readfile("test/mess.db");
	echo file_get_contents("test/mess.db");
?>
</body>
</html>
