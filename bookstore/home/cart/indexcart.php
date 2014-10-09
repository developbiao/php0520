<?php 
session_start();
include "../public/common/config.inc.php";
 ?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="../public/css/index.css">
</head>
<body>
	<div class="main">
		<?php 
			include "../public/header.php";
		 ?>	
		<div class="nav"></div>
		<div class="content">
			<div class="class">
				<div class="title">
					<a href='../index.php'>首页</a> &raquo; 购物车 
				</div>
				<div class="class_shops">
					<table border='1px' cellspacing='0'>
						<tr>
							<th>商品</th>
							<th>图片</th>
							<th>价格</th>
							<th>数量</th>
							<th>合计</th>
							<th>删除</th>
						</tr>	
						<?php 
						foreach($_SESSION[shops] as $shop){
							echo "<tr>";
							echo "<td>{$shop[sname]}</td>";
							echo "<td><img src='../../public/uploads/th_{$shop[image]}' width=100 height=100></td>";
							echo "<td>{$shop[price]}</td>";
							echo "<td><a href='opcart.php?action=dec&shop_id={$shop[id]}'><button>-</button></a>{$shop[num]}<a href='opcart.php?action=inc&shop_id={$shop[id]}'><button>+</button></a></td>";
							echo "<td>".$shop[num]*$shop[price]."</td>";
							echo "<td><a href='opcart.php?action=del&shop_id={$shop[id]}'>删除</a></td>";
							echo "</tr>";
							$tot+=$shop[num]*$shop[price];
						}
						 ?>
						 <tr>
						 	<td>总合计:</td>
						 	<td><?php echo $tot ?></td>
						 	<td colspan='4'><a href="opcart.php?action=clear">清空购物车</a></td>
						 </tr>
					</table>
				</div>
			</div>
		</div>
		<?php 
			if($_SESSION['userlogin']){
				$sqlConn="select * from conn where user_id={$_SESSION[user_id]}";
				$rstConn=mysql_query($sqlConn);
				if(mysql_num_rows($rstConn)){
		?>
	
		<div class="orders">
			<fieldset>
				<legend>
					<h4>联系方式:</h4>	
				</legend>
				<form action='../ordercommit.php' method='post'>
					<table border='1px' cellspacing='0'>
						<tr>
							<th>选择</th>
							<th>姓名</th>
							<th>地址</th>
							<th>电话</th>
							<th>邮箱</th>
						</tr>
						<?php 
						while($rowConn=mysql_fetch_assoc($rstConn)){
							echo "<tr>";
							echo "<td><input type='radio' name='conn_id' value='{$rowConn[id]}'/></td>";
							echo "<td>{$rowConn[rname]}</td>";
							echo "<td>{$rowConn[addr]}</td>";
							echo "<td>{$rowConn[tel]}</td>";
							echo "<td>{$rowConn[email]}</td>";
							echo "</tr>";
						}
						 ?>
						<tr>
							<td colspan='5'>
								<input type="submit" value='提交订单' style='color:#f00;font-weight:bold;'>
							</td>
						</tr>
					</table>	
				</form>
			</fieldset>	
		</div>	
	
		<?php
				}else{
					echo "<p>请还没有联系方式，请去 <a href='../person/index.php?action=show'>个人中心</a> 添加!</p>";		
				}
			}else{
				echo "<p>提交订单请先 <a href='../login/login.php'>登录</a>!</p>";
			}
		 ?>	

		<?php 
			include "../public/footer.php";
		 ?>	
	</div>
</body>
</html>