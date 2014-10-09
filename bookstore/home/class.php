<?php 
session_start();

include 'public/common/config.inc.php';
$class_id=$_GET['class_id'];
$sqlClass="select * from class where id={$class_id} order by id";
$rstClass=mysql_query($sqlClass);
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

			<?php 
				while($rowClass=mysql_fetch_assoc($rstClass)){
			?>

			<div class="class">
				<div class="title">
					<a name="<?php echo $i+1 ?>"></a>
					<span class="title-left"><a href='index.php'>首页</a> &raquo; <?php echo $rowClass[cname] ?></span>
					<?php 
						$sqlBrand="select * from brand where class_id={$rowClass[id]} order by id";
						$rstBrand=mysql_query($sqlBrand);
					 ?>
					<span class="title-right">
						<?php 
							while($rowBrand=mysql_fetch_assoc($rstBrand)){
								echo "<a href='class.php?brand_id={$rowBrand[id]}&class_id={$rowClass['id']}'>{$rowBrand[bname]}</a> ";
							}
						 ?>
					</span>
				</div>
				<div class="class_shops">
					<?php 
						if($_GET['brand_id']){
								$sqlShopBrand="select * from shop where brand_id={$_GET['brand_id']} order by rand()";
						}else{
							$sqlShopBrand="select * from shop where brand_id in(select min(id) from brand where class_id={$rowClass[id]} order by id) order by rand()";
						}
						$rstShopBrand=mysql_query($sqlShopBrand);
						while($rowShopBrand=mysql_fetch_assoc($rstShopBrand)){
							if($rowShopBrand['shelf']){
					 ?>
					<div class="class_shop">
						<a href="shopinfo.php?class_id=<?php echo $rowClass[id] ?>&shop_id=<?php echo $rowShopBrand[id]?>"><img src="../public/uploads/th_<?php echo $rowShopBrand[image] ?>"></a>
					</div>	
					<?php 
							}
						}
					 ?>

					<div class="clear"></div>
				</div>
			</div>	

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