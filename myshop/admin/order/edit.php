<?php 
include "../../public/common/dbconfig.inc.php";
$code=$_GET['code'];

$sqlStatus="SELECT * FROM orderstat ORDER BY id";
$rstStatus=mysql_query($sqlStatus);

$status_id=$_GET['status_id'];
 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<center>
	<h3>修改订单状态</h3>	
	<form action="update.php" method='post'>
		<table width='' border='1px' cellspacing='0'>
			<tr>
				<td>订单号:</td>
				<td><input type="text" name='bname' value='<?php echo $code ?>' disabled></td>
			</tr>	

			<tr>
				<td>订单状态:</td>	
				<td>
					<select name="status_id" id="">
						<?php 
							while($rowStatus=mysql_fetch_assoc($rstStatus)){
								if($rowStatus[id]==$status_id){
									echo "<option value='{$rowStatus[id]}' selected>{$rowStatus[sname]}</option>";
								}else{

									echo "<option value='{$rowStatus[id]}'>{$rowStatus[sname]}</option>";
								}
							}
						 ?>
					</select>	
				</td>	
			</tr>
			
			<input type="hidden" name="code" value='<?php echo $code ?>'>	

			<tr>
				<td><input type="submit" value="修改"></td>
				<td><input type="reset" value="重置"></td>
			</tr>
		</table>
	</form>
	</center>
</body>
</html>