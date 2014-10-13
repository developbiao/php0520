<?php
include '../../public/common/dbconfig.inc.php';
include '../public/common/functions.inc.php';

$id = $_POST['id'];
$sname = $_POST['sname'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$shelf = $_POST['shelf'];
$image = $_POST['pic'];
$brand_id = $_POST['brand_id'];
$oldimage = $_POST['oldimage'];
/*
echo "<h3>".$id."<h3>";
echo "<h3>".$sname."<h3>";
echo "<h3>".$price."<h3>";
echo "<h3>stock:".$stock."<h3>";
echo "<h3>shelf:".$shelf."<h3>";
echo "<h3>image:".$image."<h3>";
echo "<h3>brand_id:".$brand_id."</h3>";
echo "<h3>oldimage:".$oldimage."</h3>";
exit;
//测试POST拿到的数据
*/

if($_FILE['pic']['error']===4){
	$imgname = $oldimage;
}else{
	//图片上传
	$dir = '../../public/uploads';

	$imgname = upload($dir);
	$imgfile = $dir .'/'.$imgname;

	//图片缩放
	//thumb($imgfile, 200, 200);
}

	//打商品添加到数据库
	$sqlShop = "UPDATE shop SET name='{$sname}', price='{$price}', stock='{$stock}', shelf='{$shelf}', image='{$imgname}', brand_id='{$brand_id}' WHERE id=$id";
	//echo $sqlShop//;
	//exit;
	if(mysql_query($sqlShop)){
		if($_FILES['pic']['error']===0){
			unlink('../../public/uploads/'.$oldimage);
			unlink('../../public/uploads/th_'.$oldimage);

		}
		echo "<script>location='index.php'</script>";
	}

?>