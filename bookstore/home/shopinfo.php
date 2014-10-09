<?php 
session_start();
include 'public/common/config.inc.php';
$class_id=$_GET['class_id'];
$shop_id=$_GET['shop_id'];
$sqlShop="select * from shop where id={$shop_id}";
$rstShop=mysql_query($sqlShop);
$rowShop=mysql_fetch_assoc($rstShop);

 ?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="public/css/index.css">
</head>
<body>
	<div class="main">
		<?php 
			include "public/header.php";
		 ?>	
		<div class="nav"></div>
		<div class="content">
			<div class="class">
				<div class="title">
					<a href='class.php?brand_id=<?php echo $rowShop[brand_id] ?>&class_id=<?php echo $class_id ?>'>品牌</a> &raquo; <?php echo $rowShop[sname] ?>
				</div>
				<div class="class_shops">
					<table border='1px' cellspacing='0'>
						<tr>
							<th>商品</th>
							<th>价格</th>
							<th>库存</th>
							<th>购物车</th>
						</tr>	
						<tr>
							<?php 
								echo "<td><a href='../public/uploads/{$rowShop[image]}' target='_blank'><img src='../public/uploads/th_{$rowShop[image]}'></a></td>";
								echo "<td>{$rowShop[price]}</td>";
								echo "<td>{$rowShop[stock]}</td>";
								echo "<td><a href='cart/addcart.php?shop_id={$shop_id}&class_id={$class_id}'>放入购物车</a></td>";
							 ?>
						</tr>
					</table>
				</div>
			</div>
		</div>
			
		<div class='commit'>
			<?php 
				if($_SESSION[userlogin]){
			 ?>
			<fieldset class='commit_send'>
				<legend>
					<h4>发表评论:</h4>	
				</legend>
				<form action="insertcommit.php" method='post'>
					<textarea name="content" id="" rows="10"></textarea>
					<input type="hidden" name="shop_id" value='<?php echo $shop_id ?>'>
					<input type="submit" value='发布'>
				</form>
			</fieldset>
			<?php  
				}else{
					echo "<p>登录以后才可以评论，请先<a href='login/login.php'>登录</a></p>";
				}
			?>
			<h4>查看评论:</h4>	
			<?php 
				$sqlCommit="select commit.content,user.username from commit,user where commit.user_id=user.id and commit.shop_id={$shop_id}";
				$rstCommit=mysql_query($sqlCommit);
				while($rowCommit=mysql_fetch_assoc($rstCommit)){

			 ?>
			<fieldset class='commit_show'>
				<legend>
					<h5><?php echo $rowCommit[username] ?></h5>
				</legend>
				<p><?php echo $rowCommit[content] ?></p>
			</fieldset>
			<?php
				}
			?>
		</div>

		<?php 
			include "public/footer.php";
		 ?>	
	</div>
</body>
</html>