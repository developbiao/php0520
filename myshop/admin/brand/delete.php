<?php
/*
@Describe:品牌的删除
@Date:2014/09/30
@Author:GongBiao
*/
	include '../../public/common/dbconfig.inc.php';
	$id = $_GET['id'];
	$sqlBrand = "DELETE FROM brand WHERE id='{$id}'";
	if(mysql_query($sqlBrand)){
		echo "<script>alert('Delete Ok!');</script>";
		echo "<script>location='index.php'</script>";

	}else{
		echo "<script>alert('Delete Faild!');></script>";
		echo "<script>location='index.php'></script>";

	}
?>