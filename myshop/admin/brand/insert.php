<?php
include '../../public/common/dbconfig.inc.php';
$shopclass_id = $_POST['class_id'];
$bname = $_POST['bname'];
$sqlBrand = "INSERT INTO brand(name, shopclass_id) VALUES('{$bname}', '{$shopclass_id}')";
// echo $sqlBrand;
// exit;
if(mysql_query($sqlBrand)){
	echo "<script>alert('Insert Date Succeful!')</script>";
	echo "<script>location='index.php'</script>";
}else{
	echo "<script>alert('Insert Date Faild!')</script>";
	echo "<script>location='index.php'</script>";

};
?>