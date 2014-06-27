<!DOCTYPE HTML>
<!-- 
@Describe:用户注册页面
-->
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
	<title>reg</title>
	<style type="text/css">
		table{
			border-collapse:collapse;
		}

		#auto{
			width:100px;
			height:50px;
		}
		img{
			margin-top:5px;
		}
	</style>
</head>
<body>
	<h3> 用户注册页面</h3>
	<hr/>
	<table width="500px" border="1px">
	<form action="reg.php" mthod="post">
		<tr>
			<td>姓&nbsp;&nbsp;名：</td>
			<td colspan="2"><input type="text" name="user" id=""></td>
		</tr>
		<tr>
			<td>密&nbsp;&nbsp;码：</td>
			<td><input type="password" name="password" id=""></td>
		</tr>
		<tr>
			<td>验证码：</td>
			<td><input type="text" name="vcode" id="auth"><img src="auth.php"/></td>
		</tr>
		<tr>
			<td><input type="submit" value="提交"></td>
			<td><input type="reset" value="重置"></td>
		</tr>

	</form>
	</table>
</body>
</html>