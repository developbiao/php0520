<?php
header("content-type:text/html; charset=utf-8");
$username = "Çå·çÔÆ";

setcookie("username", $username, 84600, "/");
echo "»¶Ó­{$_COOKIE['username']}"
?>
