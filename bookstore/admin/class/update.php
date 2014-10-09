<?php 
include '../public/common/acl.inc.php';

include "../public/common/config.inc.php";

$cname=$_POST['cname'];
$id=$_POST['id'];

$sqlClass="update class set cname='{$cname}' where id='{$id}'";

if(mysql_query($sqlClass)){
	echo "<script>location='index.php'</script>";
}
 ?>