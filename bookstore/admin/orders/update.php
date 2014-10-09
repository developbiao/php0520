<?php 
include '../public/common/acl.inc.php';

include "../public/common/config.inc.php";

$code=$_POST['code'];
$status_id=$_POST['status_id'];

$sqlOrders="update orders set status_id='{$status_id}' where code='{$code}'";

if(mysql_query($sqlOrders)){
	echo "<script>location='index.php'</script>";
}
 ?>