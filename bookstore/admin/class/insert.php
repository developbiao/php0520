<?php 
include '../public/common/acl.inc.php';

include "../public/common/config.inc.php";

$cname=$_POST['cname'];
$sqlClass="insert into class(cname) values('{$cname}')";

if(mysql_query($sqlClass)){
	echo "<script>location='index.php'</script>";
}
 ?>