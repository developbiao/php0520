<?php 
session_start();
include "../public/common/config.inc.php";

$shop_id=$_GET[shop_id];
$sqlShop="select * from shop where id={$shop_id}";
$rstShop=mysql_query($sqlShop);
$rowShop=mysql_fetch_assoc($rstShop);

$_SESSION['shops'][$rowShop[id]]=$rowShop;
$_SESSION['shops'][$rowShop[id]][num]=1;

echo "<script>location='indexcart.php'</script>";
 ?>