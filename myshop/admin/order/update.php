<?php 
include '../../public/common/dbconfig.inc.php';
$code=$_POST['code'];
$status_id=$_POST['status_id'];

$sqlOrders="UPDATE orders SET orderstat_id='{$status_id}' WHERE code='{$code}'";

if(mysql_query($sqlOrders)){
	echo "<script>alert('update is ok!');</script>";
	echo "<script>location='index.php'</script>";
}
 ?>