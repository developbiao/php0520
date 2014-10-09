<?php
include '../../public/common/dbconfig.inc.php';
$cname = $_POST['cname'];
$sqlClass = "INSERT INTO shopclass(name) VALUES('{$cname}')";
if(mysql_query($sqlClass)){

	echo "<script>alert('Insert is ok!');</script>";
	echo "<script>location='index.php'</script>";
}else{
	echo "<script>alert('Insert Field!');</script>";
	echo "<script>location='index.php'</script>";

}
?>