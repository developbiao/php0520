<?php
header("Content-Type:text/html; charset=utf-8");

//开启session
session_start();

//清空$_SESSION
session_unset();

//销毁session
session_destroy();

//删除cookie
setcookie(session_name(), "", time()-3600, "/");

//到登录页面
echo "<script>alert('您已经退出登录!');</script>";
echo "<script>location='login.php';</script>";


?>
