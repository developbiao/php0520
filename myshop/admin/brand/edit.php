<?
header("Content-Type:text/html; charset=utf-8");
include '../../public/common/dbconfig.inc.php';
$id = $_GET['id'];
$sqlClass = "SELECT * FROM shopclass ORDER BY id";
$rstClass = mysql_query($sqlClass);

$sqlBrand = "SELECT * FROM brand WHERE id={$id} ";
$rstBrand = mysql_query($sqlBrand);
$rowBrand = mysql_fetch_assoc($rstBrand);
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
	<title>修改品牌</title>
</head>
<body>
	<center>
		<h3>修改品牌</h3>
		<form action="update.php" method="post">
			<table width='' border='1px' cellspacing='0'>
				<tr> 
					<td>品牌:</td>
					<td><input type="text" name="bname" value='<?php echo $rowBrand['name']?>'></td>
					<td>分类:</td>
					<td>
						<select name="class_id" id="">
							<?php
								while($rowClass=mysql_fetch_assoc($rstClass)){
									if($rowBrand[id]==$rowClass[id]){
									echo "<option value='{$rowClass['id']}' selected>{$rowClass[name]}</option>";
								}
								else{
									echo "<option value='{$rowClass['id']}'>{$rowClass[name]}</option>";
								}

								}
							?>
						</select>
					</td>

				</tr>
				<input type="hidden" name="id" value='<?php echo $id ?>'>
				<tr>
					<td><input type="submit" value="提交"></td>
					<td><input type="reset" value="重置"</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>