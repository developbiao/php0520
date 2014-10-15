<?php
/*
@Describe:用户退出
*/
session_start();

session_unset();
session_destroy();
setcookie(session_name(), '', time()-3600, '/');

echo "<script>location='login.php'</script>";

?>