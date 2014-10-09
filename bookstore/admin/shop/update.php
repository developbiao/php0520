<?php 
include '../public/common/acl.inc.php';

include "../public/common/config.inc.php";
include "../public/common/functions.inc.php";

$id=$_POST['id'];
$sname=$_POST['sname'];
$price=$_POST['price'];
$stock=$_POST['stock'];
$shelf=$_POST['shelf'];
$image=$_POST['image'];
$brand_id=$_POST['brand_id'];
$oldimage=$_POST['oldimage'];

if($_FILES['pic']['error']===4){
	$imgname=$oldimage;
}else{

	//图片上传
	$dir='../../public/uploads';

	$imgname=upload($dir);

	$imgfile=$dir.'/'.$imgname;

	//图片缩放
	thumb($imgfile,200,200);

}

//把商品添加到数据库
$sqlShop="update shop set sname='{$sname}',price='{$price}',stock='{$stock}',shelf='{$shelf}',image='{$imgname}',brand_id='{$brand_id}' where id={$id}";

if(mysql_query($sqlShop)){
	if($_FILES['pic']['error']===0){
		unlink('../../public/uploads/'.$oldimage);
		unlink('../../public/uploads/th_'.$oldimage);
	}
	echo "<script>location='index.php'</script>";
}
 ?>