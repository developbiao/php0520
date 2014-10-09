<?php 
session_start();
$url=$_SERVER[HTTP_REFERER];

if($_SESSION['httpref']){
  $_SESSION['url']=$_SESSION['httpref'];
}else{
  $_SESSION['url']=$url;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网上书店管理系统</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<link href="../public/css/css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="147" background="../public/images/top02.gif"><img src="../public/images/top03.gif" width="776" height="147" /></td>
  </tr>
</table>
<table width="562" border="0" align="center" cellpadding="0" cellspacing="0" class="right-table03">
  <tr>
    <td width="221"><table width="95%" border="0" cellpadding="0" cellspacing="0" class="login-text01">
      
      <tr>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="login-text01">
          <tr>
            <td align="center"><img src="../public/images/ico13.gif" width="107" height="97" /></td>
          </tr>
          <tr>
            <td height="40" align="center">&nbsp;</td>
          </tr>
          
        </table></td>
        <td><img src="../public/images/line01.gif" width="5" height="292" /></td>
      </tr>
    </table></td>
    <td>
      <form action='../login/logcheck.php' method='post'>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="31%" height="35" class="login-text02">用 户：<br /></td>
            <td width="69%"><input name="username" type="text" size="33" /></td>
          </tr>
          <tr>
            <td height="35" class="login-text02">密 码：<br /></td>
            <td><input name="password" type="password" size="33" /></td>
          </tr>
          <tr>
            <td height="35">&nbsp;</td>
            <?php 
              if($_SESSION['httpref']){
                echo "<input type='hidden' name='httpref' value='{$_SESSION[httpref]}' />";
              }else{
                echo "<input type='hidden' name='httpref' value='{$_SERVER['HTTP_REFERER']}' />";
              }
            ?>
            <td><input name="Submit2" type="submit" class="right-button01" value="登陆" onClick="window.location='index.html'" />
              <input name="Submit232" type="reset" class="right-button02" value="重置" /></td>
          </tr>
        </table>
      </form>
    </td>
  </tr>
</table>
</body>
</html>