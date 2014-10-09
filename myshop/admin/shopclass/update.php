<?php
	include '../../public/common/dbconfig.inc.php';
	$cname = $_POST['cname'];
	$id = $_POST['id'];
	$sqlClass = "UPDATE shopclass set name='{$cname}' WHERE id=$id";
	//echo $sqlClass;
	//exit;
	if(mysql_query($sqlClass)){

		echo "<script>alert('Update is ok!');</script>";
		echo "<script>location='index.php'</script>";
	}else{
		echo "<script>alert('Update Field!');</script>";
		echo "<script>location='index.php'</script>";

	}
?>