<?php
/*
@Desribe:插入user用户到数据
*/
include '../../public/common/dbconfig.inc.php';
include '../public/common/acl.inc.php';
$username=$_POST['username'];
$password=md5($_POST['password']);
$repassword=md5($_POST['repassword']);
$regtime=time();
/*
echo "<h3>".$username."</h3>";
echo "<h3>".$password."</h3>";
echo "<h3>repassword:".$repassword."</h3>";
*/
if($password===$repassword){
	$sqlUser = "INSERT INTO user(username, password, regtime) VALUES('$username', '$password', '$regtime')";
	if(mysql_query($sqlUser)){
		echo "<script>alert('ok!');</script>";
		echo "<script>location='index.php'</script>";
	}else{
		echo "<script>alert('Error!');</script>";
		echo "<script>location='add.php'</script>";
	}
}else{
		echo "<script>alert('Erorr!');</script>";
		echo "<script>location='index.php'</script>";
}

?>