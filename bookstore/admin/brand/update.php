<?php 
include '../public/common/acl.inc.php';

include "../public/common/config.inc.php";

$bname=$_POST['bname'];
$class_id=$_POST['class_id'];
$id=$_POST['id'];

$sqlBrand="update brand set bname='{$bname}',class_id='{$class_id}' where id='{$id}'";

if(mysql_query($sqlBrand)){
	echo "<script>location='index.php'</script>";
}
 ?>