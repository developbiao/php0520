<?php
/*
@Describe:删除商品
@Author:GongBiao
@Date:2014/10/13
*/
include '../../public/common/dbconfig.inc.php';

$id =$_GET['id'];
$image = $_GET['image'];

$sqlShop = "DELETE FROM shop WHERE id={$id}";
if(mysql_query($sqlShop)){
	unlink('../../public/uploads/'.$image); //删除图书的封面
	unlink('../../public/uploads/th_'.$image); //删除图书的缩略图
	echo "<script>alert('删除成功!')</script>";
	echo "<script>location='index.php'</script>";

}else{
	echo "<script>alert('删除失败!')</script>";
	echo "<script>location='index.php'</script>";

}
?>