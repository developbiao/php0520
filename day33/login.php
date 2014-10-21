<?php
$username = $_GET[username];
$password = $_GET[password];
if($username == 'user3' && $password=='123'){
	echo "Login is Succefull!";
	//echo "<script>location='index.php'</script>";

}else{
	echo "<script>alert('Login Error! Pleas Check user name or password!')</script>";
}
?>
