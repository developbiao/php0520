<?php 
include '../../public/common/dbconfig.inc.php';
$code=$_GET['code'];

$sqlOrders="DELETE FROM orders WHERE code={$code}";
if(mysql_query($sqlOrders)){
	echo "<script>location='index.php'</script>";
}
 ?>