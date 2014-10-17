<?php
include '../../public/common/dbconfig.inc.php';
$sqlClass = "SELECT * FROM shopclass ORDER BY id";
$rstClass= mysql_query($sqlClass);
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<title>添加商品</title>
</head>
<body>
	<center>
		<h3>添加商品</h3>
		<form action="insert.php" method="post" enctype="mutipart/form-data">
			<table border='1px' cellspacing='0'>
				<tr>
					<td>商品:</td>
					<td><input type="text" name="sname"></td>
				</tr>
				<tr>
					<td>图片</td>
					<td><input type="file" name="pic"></td>
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
								while($rowBrand = mysql_fetch_assoc($rstBrand)){
									echo "<option value='{$rowBrand[id]}'>|-{$rowBrand['name']}</option>";
								}
							}
						?>
						</select>
					 </td>
				</tr>
				<tr>
					<td>价格</td>
					<td><input type="text" name="price"></td>
				</tr>
				<tr>
					<td>库存</td>
					<td><input type="text" name="stock"></td>
				</tr>
				<tr>
					<td>货架:</td>
					<td>
						<input type="radio" name="shelf" id="r1" value='1' checked><lable>上架</lable>
						<input type="radio" name="shelf" id="r2" value="0"><lable>下架</lable>
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