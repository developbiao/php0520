<?php 
include '../public/common/acl.inc.php';

include "../public/common/config.inc.php";

$sname=$_POST['sname'];
$id=$_POST['id'];

$sqlStatus="update status set sname='{$sname}' where id='{$id}'";

if(mysql_query($sqlStatus)){
	echo "<script>location='index.php'</script>";
}
 ?>