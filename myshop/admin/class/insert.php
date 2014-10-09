<?php
include '../../public/common/dbconfig.inc.php';
$cname = $_POST['cname'];
$sqlClass= "INSERT INTO shopclass(name) VALUES('{$cname}')";
if(mysql_query($sqlClass)){
	echo "<script type='text/javascript'>alert('add succeful!');</script>";
	echo "<script>location='index.php'</script>";
}else{
	echo "<script type='text/javascript>'> </script>";
	echo "<script>location='index.php'</script>";
}
?>
