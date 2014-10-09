<?php
/*
@Describe:删除商品分类 
*/
	include '../../public/common/dbconfig.inc.php';
	$id = $_GET['id'];
	$sqlClass = "DELETE FROM shopclass WHERE id='{$id}'";
	if(mysql_query($sqlClass)){
		echo "<script>alert('delete Down!');</script>";
		echo "<script>location='index.php'</script>";
	}else{
		echo "<script>alert('delete faild!');</script>";
	}
?>