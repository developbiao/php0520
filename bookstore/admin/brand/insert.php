<?php 
include '../public/common/acl.inc.php';

include "../public/common/config.inc.php";

$bname=$_POST['bname'];
$class_id=$_POST['class_id'];

$sqlBrand="insert into brand(bname,class_id) values('{$bname}',{$class_id})";

if(mysql_query($sqlBrand)){
	echo "<script>location='index.php'</script>";
}
 ?>