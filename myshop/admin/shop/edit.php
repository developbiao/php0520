<?php
include '../../public/common/dbconfig.inc.php';

$id = $_GET['id'];
$sqlShop = "SELECT * FROM shop WHERE id={$id}";
$rstShop = mysql_query($sqlShop);
$rowShop = mysql_fetch_assoc($rstShop);

$sqlClass = "SELECT * FROM shopclass ORDER BY id";
$rstClass = mysql_query($sqlClass);
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>修改商品</title>
</head>
<body>
	<center>
	<h3>修改商品信息</h3>	
	<form action="update.php" method="post" enctype='mutlipart/form-data'>
		<table width='' border='1px' cellspacing='0'>
			<tr>
				<td>商品:</td>
				<td><input type="text" name="sname" value='<?php echo $rowShop['name']?>'></td>
			</tr>
			<tr>
				<td>图片:</td>
				<td><input type='file' name='pic'></td>
			</tr>
			<tr>
				<td>品牌:</td>
				<td>
					<select name="brand_id" id="">
						<?php
							while($rowClass=mysql_fetch_assoc($rstClass)){
								echo "<option disabled>{$rowClass['name']}</option>";
								$sqlBrand = "SELECT * FROM brand WHERE shopclass_id={$rowClass[id]} ORDER BY id";
								$rstBrand = mysql_query($sqlBrand);
								while($rowBrand=mysql_fetch_assoc($rstBrand)){
									if($rowShop[brand_id]==$rowBrand[id]){
										echo "<option value='{$rowBrand[id]}' selected>|-{$rowBrand[name]}</option>";
									}else{
										echo "<option value='{$rowBrand[id]}'>|-{$rowBrand['name']}</option>";
									}

								}
							}
						?>
					</select>	
				</td>
			</tr>
			<tr>
				<td>价格:</td>
				<td><input type="text" name="price" value='<?php echo $rowShop['price']?>'/></td>
			</tr>
			<tr>
				<td>库存:</td>
				<td><input type="text" name="stock" value='<?php echo $rowShop['stock']?>'></td>
			</tr>
			<tr>
				<td>货架:</td>
				<td>
					<?php
						if($rowShop['shelf']){
							echo '<input type="radio" name="shelf" id="r1" value="1" checked><label for="r1">上架</label>';
							echo '<input type="radio" name="shelf" id="r2" value="0"><label for="r2">下架</label>';

						}else{
							echo '<input type="radio" name="shelf" id="r1" value="1"><label for="r1">上架</label>';
							echo '<input type="radio" name="shelf" id="r2" value="0" checked><label for="r2">下架</label>';

						}
					?>
				 </td>
			</tr>
			<input type="hidden" name="id" value='<?php echo $id?>'>
			<input type="hidden" name="oldimage" value='<?php echo $rowShop['image']?>'>
			<tr>
				<td><input type="submit" value="修改"></td>
				<td><input type="reset" value="重置"></td>
			</tr>
		</table>
	</form>
		<img src="../../public/uploads/th_<?php echo $rowShop['image']?>" alt="Shop Image"/>
	</center>
</body>
</html>