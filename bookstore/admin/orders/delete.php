<?php 
include '../public/common/acl.inc.php';

include '../public/common/config.inc.php';

$code=$_GET['code'];

$sqlOrders="delete from orders where code={$code}";
if(mysql_query($sqlOrders)){
	echo "<script>location='index.php'</script>";
}
 ?>