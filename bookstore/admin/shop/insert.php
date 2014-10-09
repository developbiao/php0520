<?php 
include '../public/common/acl.inc.php';

include "../public/common/config.inc.php";
include "../public/common/functions.inc.php";

$sname=$_POST['sname'];
$price=$_POST['price'];
$stock=$_POST['stock'];
$shelf=$_POST['shelf'];
$image=$_POST['image'];
$brand_id=$_POST['brand_id'];

//图片上传
$dir='../../public/uploads';

$imgname=upload($dir);

$imgfile=$dir.'/'.$imgname;

//图片缩放
thumb($imgfile,200,200);

//把商品添加到数据库

$sqlShop="insert into shop(sname,price,stock,shelf,image,brand_id) values('{$sname}',{$price},'{$stock}','{$shelf}','{$imgname}','{$brand_id}')";

if(mysql_query($sqlShop)){
	echo "<script>location='index.php'</script>";
}
 ?>