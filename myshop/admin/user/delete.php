<?php
include "../../public/common/dbconfig.inc.php";
$id=$_GET['id'];
$sql="DELETE FROM user WHERE id={$id}";
if(mysql_query($sql)){
	echo "<script>alert('删除成功!');</script>";
	echo "<script>location='index.php'</script>";
}else{
	echo "<script>alert('删除失败!');</script>";
	echo "<script>location='index.php'</script>";
}
?>