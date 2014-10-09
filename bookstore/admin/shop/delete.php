<?php 
include '../public/common/acl.inc.php';

include '../public/common/config.inc.php';

$id=$_GET['id'];
$image=$_GET['image'];

$sqlShop="delete from shop where id={$id}";
if(mysql_query($sqlShop)){  //执行sql语句成功的时候
	unlink('../../public/uploads/'.$image);   //删除图书的封面
	unlink('../../public/uploads/th_'.$image);  //删除图书的缩略图
	echo "<script>alert('删除成功!');</script>";
	echo "<script>location='index.php'</script>";
}else{
	echo "<script>alert('删除失败!');</script>";
	echo "<script>location='index.php'</script>";
}
 ?>