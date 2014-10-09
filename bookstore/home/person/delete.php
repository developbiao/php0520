<?php 
include "../public/common/config.inc.php";

$id=$_GET[id];
$sqlConn="delete from conn where id={$id}";
if(mysql_query($sqlConn)){
	echo "<script>location='index.php?action=show'</script>";
}
 ?>