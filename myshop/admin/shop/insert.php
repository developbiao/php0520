<?php
include '../../public/common/dbconfig.inc.php';
include '../public/common/functions.inc.php';

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
//thumb($imgfile,200,200);  //这里面有一个问题需要解决
//把商品添加到数据库
$sqlShop = "INSERT INTO shop(name, price, stock, shelf, image, brand_id) VALUES('{$sname}', '{$price}', '{$stock}', '{$shelf}', '{$imagename}', '${brand_id}')";
if(mysql_query($sqlShop)){
	echo "<script>alert('Add Shop Succeful!');</script>";
	echo "<script>location='index.php'</script>";
}else{
	echo "<script>alert('Add Fail!');</script>";
	echo "<script>location='add.php'</script>";

}
?>