<?php
/*
 * @Describe:接受判断处理页面
 * @Author:GongBiao
 * @Date:2014/06/30
 * 
*/
header("content-type:text/html; charset=utf-8");
$filename = "test/mess.db";
$str = $_POST['mname'];
if (!empty($str)){
	$str = "<h3>$str</h3>";
	file_put_contents($filename, $str, FILE_APPEND);
	echo "<script>location='index.php'</script>";
}else{
	echo "<script>alert('留言不能为空!');</script>";
	echo "<script>location='index.php'</script>";
}
?>
