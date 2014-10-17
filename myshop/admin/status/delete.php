<?php 
header("Content-Type:text/html; chaset=utf-8");
include '../../public/common/dbconfig.inc.php';
$id=$_GET['id'];
$sqlStatus="DELETE FROM orderstat WHERE id={$id}";
if(mysql_query($sqlStatus)){
	echo "<script>alert('Delete is Done!');</script>";
	echo "<script>location='index.php'</script>";
}
 ?>
