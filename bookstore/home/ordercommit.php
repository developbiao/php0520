<?php 
session_start();
header('content-type:text/html;charset=utf-8');
include "./public/common/config.inc.php";

$code=time().mt_rand();
$user_id=$_SESSION['user_id'];
$time=time();
$conn_id=$_POST['conn_id'];
$status_id=1;

foreach($_SESSION[shops] as $shop){
	$sqlOrders="insert into orders(code,user_id,conn_id,status_id,shop_id,price,num,time) values('{$code}','{$user_id}','{$conn_id}','{$status_id}','{$shop[id]}','{$shop[price]}','{$shop[num]}','{$time}')";

	mysql_query($sqlOrders);
}

echo "<script>alert('您的订单号是: {$code}，请记住，否则问小蛋!')</script>";
echo "<script>location='person/index.php?action=order'</script>";
 ?>