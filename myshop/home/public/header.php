<!-- header part-->
<div class="header">
	<img src="/myshop/home/public/images/logo.png" alt="" width="50px" height="50px"/>
	<span class="header-left">网上书店[<a href='/myshop/home/index.php'>首页</a>]</span>
	<span class="header-right">
	<?php
		if($_SESSION['username']){
			echo "欢迎<a href='/myshop/home/person/index.php?action=show'>".$_SESSION['username']. "</a>回家 <a href='/myshop/home/login/logout.php'>退出</a>|";

		}else{
			echo "<a href='/myshop/home/login.php'>登陆</a>|";
			echo "<a href='/myshop/home/login/reg.php'>注册</a>|";
		}
	?>
	<a href='/myshop/home/cart/indexcart.php'>购物车</a>
	</span>
</div>