<?php
header("content-type:text/html; charset=utf-8");
$username = "�����";

setcookie("username", $username, 84600, "/");
echo "��ӭ{$_COOKIE['username']}"
?>
