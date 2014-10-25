<!--
/*
@Describe:模拟微信服务器
@Date:2014/10/25
@Author:GongBiao
*/

//时间戳
// echo strtotime('2014-09-11 11:21:33');
// echo "<br/>";
// echo date('Y-m-d h|i|s', strtotime('2014-9-11 11:21:33'));
-->
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
	<title>weinxin</title>
</head>
<body>
	<center>
		<h3>微信模拟器</h3>
		<form action="proce.php" method="GET">
			<table width='100px' cellspacing='1'>
				<tr>
					<td>TimeStamp:</td>
					<td><input type="text" name="timestamp"></td>
				</tr>
				<tr>
					<td>nonce</td>
					<td><input type="text" name="nonce"></td>
				</tr>
				<tr>
					<td>Message</td>
					<td><input type="text" name="echostr"></td>
				</tr>
				<tr>
					<td><input type="submit" value="发送"></td>
					<td><input type="reset" value="重置"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>




