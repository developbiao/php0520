<?php 
session_start();

session_unset();
session_destroy();
setcookie(session_name(),'',time()-3600,'/');

echo "<script>location='{$_SERVER[HTTP_REFERER]}'</script>";

 ?>