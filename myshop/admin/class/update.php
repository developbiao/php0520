<?php
/*
@Describe:更新商品分类信息
@Author:GongBiao
@Date:2014/09/26  17:52
*/
include '../../public/common/dbconfig.inc.php';
$cname = $_POST['cname'];
$id = $_POST['id'];
$sqlClass = "UPDATE shopclass SET name='{$cname}' WHERE id='{$id}'";
// echo $sqlClass;
// exit;
if(mysql_query($sqlClass)){
	echo "<script>alert('update is ok !');</script>";
	echo "<script>location='index.php'</script>";
}
