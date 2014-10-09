<?php
/*
@Describe:update更新用户数据库信息
*/
include '../../public/common/dbconfig.inc.php';
$username = $_POST['username'];
$password= md5($_POST['password']);
$repassword =md5($_POST['repassword']);
$id = $_POST['id']; //这个是能过hidden隐藏标签传过来的id
$isadmin=$_POST['isadmin'];
/*

echo "<h3>username:".$username."</h3>";
echo "<h3>password:".$password."</h3>";
echo "<h3>repasswod:".$repassword."</h3>";
echo "<h3>id:".$id."</h3>";
echo "<h3>isadmin:".$isadmin."</h3>";

exit;
*/


if($password === $repassword){
	$sqlUser = "UPDATE user SET username='$username', password='$password', admin={$isadmin} WHERE id={$id}";
	//echo $sqlUser;
	//exit;
	if(mysql_query($sqlUser)){
		echo "<script>alert('update is ok!');</script>";
		echo "<script>location='index.php'</script>";
	}else{
		echo "<script>alert('update faild!');</script>";
		echo "<script>location='edit.php'</script>";
	}
}else{
		echo "<script>alert('password ??');</script>";
		echo "<script>location='edit.php'</script>";
}



?>