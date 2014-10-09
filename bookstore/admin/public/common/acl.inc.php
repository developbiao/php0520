<?php 
session_start();

if(!$_SESSION[adminlogin]){
	echo "<script>location='/bookstore/admin/login/login.php'</script>";
}
 ?>
