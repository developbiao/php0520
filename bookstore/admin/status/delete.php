<?php 
include '../public/common/acl.inc.php';

include '../public/common/config.inc.php';

$id=$_GET['id'];
$sqlStatus="delete from status where id={$id}";
if(mysql_query($sqlStatus)){
	echo "<script>location='index.php'</script>";
}
 ?>