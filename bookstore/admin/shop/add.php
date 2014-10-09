<?php 
include '../public/common/acl.inc.php';

include "../public/common/config.inc.php";
$sqlClass='select * from class order by id';
$rstClass=mysql_query($sqlClass);

 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<center>
	<h3>添加商品</h3>	
	<form action="insert.php" method='post' enctype='multipart/form-data'>
		<table width='' border='1px' cellspacing='0'>
			<tr>
				<td>商品:</td>
				<td><input type="text" name='sname'></td>
			</tr>	
	
			<tr>
				<td>图片:</td>
				<td><input type="file" name='pic'></td>
			</tr>	
			<tr>
				<td>品牌:</td>
				<td>
					<select name="brand_id" id="">
						<?php 
							while($rowClass=mysql_fetch_assoc($rstClass)){
								echo "<option disabled>{$rowClass[cname]}</option>";

								$sqlBrand="select * from brand where class_id={$rowClass[id]} order by id";
								$rstBrand=mysql_query($sqlBrand);
								while($rowBrand=mysql_fetch_assoc($rstBrand)){
									echo "<option value='{$rowBrand[id]}'>|-{$rowBrand[bname]}</option>";
								}

							}
						 ?>
					</select>
				</td>
			</tr>	
			<tr>
				<td>价格:</td>
				<td><input type="text" name='price'></td>
			</tr>	
			<tr>
				<td>库存:</td>
				<td><input type="text" name='stock'></td>
			</tr>	

			<tr>
				<td>货架</td>	
				<td>
					<input type="radio" name="shelf" id="r1" value='1'><label for='r1'>上架</label>
					<input type="radio" name="shelf" id="r2" value='0'><label for='r2'>下架</label>
				</td>	
			</tr>

			<tr>
				<td><input type="submit" value="添加"></td>
				<td><input type="reset" value="重置"></td>
			</tr>
		</table>
	</form>
	</center>
</body>
</html>