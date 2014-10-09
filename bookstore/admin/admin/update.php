<?php 
include '../public/common/acl.inc.php';

include "../public/common/config.inc.php";
$password=md5($_POST['password']);

$sqlAdmin="update admin set password='{$password}' where username='admin'";

if(mysql_query($sqlAdmin)){
	echo "<script>top.location='../index.php'</script>";
}
 ?>