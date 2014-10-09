<?php 
include '../public/common/acl.inc.php';

include '../public/common/config.inc.php';

$id=$_GET['id'];
$sqlClass="delete from class where id={$id}";
if(mysql_query($sqlClass)){
	echo "<script>location='index.php'</script>";
}
 ?>