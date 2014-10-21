<?php
$username = $_POST[username];
$password = $_POST[password];
if($username == 'gongbiao' && $password == '123'){
	echo "Login Succefull!";
	echo "<script>location='index.php'</script>";
}else{
	echo "<script>alert('Pleas Check Your username and password Try agin!');</script>";
	echo "<script>location='postlogin.php'</script>";
}
?>