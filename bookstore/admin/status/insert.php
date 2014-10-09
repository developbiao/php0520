<?php 
include '../public/common/acl.inc.php';

include "../public/common/config.inc.php";

$sname=$_POST['sname'];
$sqlStatus="insert into status(sname) values('{$sname}')";

if(mysql_query($sqlStatus)){
	echo "<script>location='index.php'</script>";
}
 ?>