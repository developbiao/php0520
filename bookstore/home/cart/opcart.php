<?php 
session_start();
$action=$_GET[action];
$shop_id=$_GET[shop_id];


switch($action){
	case 'del':
		unset($_SESSION['shops'][$shop_id]);
		break;
	case 'inc':
		if($_SESSION['shops'][$shop_id][num]<$_SESSION['shops'][$shop_id][stock]){
			$_SESSION['shops'][$shop_id][num]++;
		}
		
		break;
	case 'dec':
		if($_SESSION['shops'][$shop_id][num]>1){
			$_SESSION['shops'][$shop_id][num]--;
		}
		break;
	case 'clear':
		$_SESSION['shops']=array();
		break;
}

echo "<script>location='indexcart.php'</script>";
 ?>