<?php 
session_start();

if(!$_SESSION[adminlogin]){
	echo "<script>location='/myshop/admin/login/login.php'</script>";
}
 ?>