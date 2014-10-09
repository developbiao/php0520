<?php
include '../../public/common/dbconfig.inc.php';

$bname = $_POST['bname'];
$class_id = $_POST['class_id'];
$id = $_POST['id'];
/*
echo "<h3>$bname</h3>";
echo "<h3>$class_id</h3>";
echo "<h3>$id</h3>";
exit;
*/

$sqlBrand = "UPDATE brand SET name='{$bname}', shopclass_id={$class_id} WHERE id='{$id}'";
// echo $sqlBrand;
// exit;
if(mysql_query($sqlBrand)){
	echo "<script>alert('update is ok !');</script>";	
	echo "<script>location='index.php';</script>";

}else{
	echo "<script>alert('update Filed!');</script>";
	echo "<script>location='index.php'</script>";
}
?>