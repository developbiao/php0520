<?php
include '../../public/common/dbconfig.inc.php';
$sqlStatus = "INSERT INTO orderstat(name) VALUES('{$_POST['sname']}')";
if(mysql_query($sqlStatus)){
	echo "Insert Ok!";
	echo "<script>location='index.php'</script>";
}
?>