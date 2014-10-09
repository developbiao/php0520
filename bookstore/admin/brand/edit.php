<?php 
include '../public/common/acl.inc.php';

include "../public/common/config.inc.php";
$sqlClass='select * from class order by id';
$rstClass=mysql_query($sqlClass);

$id=$_GET['id'];
$sqlBrand="select * from brand where id={$id}";
$rstBrand=mysql_query($sqlBrand);
$rowBrand=mysql_fetch_assoc($rstBrand);
 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<center>
	<h3>修改品牌</h3>	
	<form action="update.php" method='post'>
		<table width='' border='1px' cellspacing='0'>
			<tr>
				<td>品牌:</td>
				<td><input type="text" name='bname' value='<?php echo $rowBrand['bname'] ?>'></td>
			</tr>	

			<tr>
				<td>分类</td>	
				<td>
					<select name="class_id" id="">
						<?php 
							while($rowClass=mysql_fetch_assoc($rstClass)){
								if($rowBrand[class_id]==$rowClass[id]){
									echo "<option value='{$rowClass[id]}' selected>{$rowClass[cname]}</option>";
								}else{
									echo "<option value='{$rowClass[id]}'>{$rowClass[cname]}</option>";
								}
							}
						 ?>
					</select>	
				</td>	
			</tr>
			
			<input type="hidden" name="id" value='<?php echo $id ?>'>	

			<tr>
				<td><input type="submit" value="修改"></td>
				<td><input type="reset" value="重置"></td>
			</tr>
		</table>
	</form>
	</center>
</body>
</html>