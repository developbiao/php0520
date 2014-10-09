<?php 
include '../public/common/acl.inc.php';

include '../public/common/config.inc.php';

$id=$_GET['id'];
$sqlBrand="delete from brand where id={$id}";
if(mysql_query($sqlBrand)){
	echo "<script>location='index.php'</script>";
}
 ?>