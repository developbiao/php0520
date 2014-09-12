<?php
header("Content-Type:text/html; charset=utf-8");
session_start();
echo "<h3>{$_SESSION['username']}欢迎来到购物中心</h3>";
echo session_name();
echo "<br/>";
echo session_id();
?>
