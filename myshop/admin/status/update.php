<?php 
include '../../public/common/dbconfig.inc.php';

$sname=$_POST['sname'];
$id=$_POST['id'];

$sqlStatus="UPDATE orderstat SET name='{$sname}' WHERE id='{$id}'";

if(mysql_query($sqlStatus)){
	echo "<script>alert('update is ok!');</script>";
	echo "<script>location='index.php'</script>";
}
 ?>
