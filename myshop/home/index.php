<?php
session_start();

include '../public/common/dbconfig.inc.php';
$sqlClass= "SELECT * FROM shopclass ORDER BY id";
$rstClass = mysql_query($sqlClass);
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>网上书店首页</title>
	<link rel="stylesheet" href="./css/index.css" type="text/css">
</head>
<body>
	<div class="main"><!-- main 开始-->
		<?php
			include 'public/header.php';
		?>
		<div class="nav"></div>
		<div class="adv">
			<img src="public/images/adheader.jpg" alt="">
		</div>
		<div class="nav"></div>
		<div class="content"><!--  content 开始-->
			<?php
				while($rowClass=mysql_fetch_assoc($rstClass)){
			?>
			<div class="class"><!-- class开始-->
				<div class="title"><!-- title 开始-->
					<a name="<?php echo $i+1?>"></a>
					<!--<?php echo $i?> -->
					<span class="title-left"><?php echo ++$i?>F <?php echo $rowClass['name']?></span>
					<?php
						$sqlBrand = "SELECT * FROM  brand WHERE shopclass_id='{$rowClass['id']}' ORDER BY id";
						$rstBrand =mysql_query($sqlBrand);
					?>
					<span class="title-right">
					<?php
						while($rowBrand=mysql_fetch_assoc($rstBrand)){
							echo "<a href='index.php?brand_id={$rowBrand[id]}&class_id={$rowClass['id']}#{$i}'>{$rowBrand['name']}</a>";	
						}
					?>
						<a href="class.php?class_id=<?php echo $rowClass[id]?>">More&raquo;</a>
					</span>
				</div><!-- title 结束-->
				<div class="shops"><!-- shop开始-->
					<?php 
						if($_GET['brand_id'] && $rowClass[id] == $_GET[class_id]){
							$sqlShopBrand = "SELECT * FROM  shop WHERE brand_id={$_GET['brand_id']} ORDER BY  rand() LIMIT 4";
							// echo $sqlShopBrand;
							// exit;
						}else{
							$sqlShopBrand="select * from shop where brand_id in(select min(id) from brand where shopclass_id={$rowClass[id]} order by id) order by rand() limit 4";
						}
						$rstShopBrand = mysql_query($sqlShopBrand);
						while($rowShopBrand=mysql_fetch_assoc($rstShopBrand)){
							if($rowShopBrand['shelf']){
					?>
					<div class="shop">
						<a href="shopinfo.php?class_id=<?php echo $rowClass[id]?>&shop_id=<?php echo $rowShopBrand[id]?>"><img src="../public/uploads/th_<?php echo $rowShopBrand[image]?>"/> </a>
						<h3>名称：<a><?php echo $rowShopBrand['name']?></a></h3>
						<h3>库存：<a><?php echo $rowShopBrand['stock']?></a></h3>
						<h3>价格:<a><?php echo $rowShopBrand['price']?></a></h3>
					</div>
					<?php
						}
							}
					?>

				</div><!-- shop 结束-->	
			</div><!-- class 结束-->
			<?php
				}
			?>

		</div><!--  content结束-->

		<div class="adv">
			<img src="public/images/adfooter.jpg" alt="">
		</div>	
		<div class="nav">
		<?php
			include 'public/footer.php';
		?>
		</div>
	</div><!-- main 结束-->
</body>
</html>