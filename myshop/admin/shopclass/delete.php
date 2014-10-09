<?php
	include '../../public/common/dbconfig.inc.php';
	$id = $_GET['id'];
	$sqlClass = "DELETE FROM shopclass WHERE id=$id";
	if(mysql_query($sqlClass)){

		echo "<script>alert('Delete is ok!');</script>";
		echo "<script>location='index.php'</script>";
	}else{
		echo "<script>alert('Delete Field!');</script>";
		echo "<script>location='index.php'</script>";

	}
	?>