<div class='header'>
	<img src="/bookstore/home/public/images/logo.png" alt="" width="50px" height="50px">	
	<span class='header-left'>网上购物书店[<a href='/bookstore/home/index.php'>首页</a>]</span>
	<span class='header-right'>
		<?php 
			if($_SESSION[userlogin]){
				echo "欢迎 <a href='/bookstore/home/person/index.php?action=show'>".$_SESSION[username]."</a> 回家 <a href='/myshop3/home/login/logout.php'>退出</a> | ";
			}else{
				echo "<a href='/bookstore/home/login/login.php'>登录</a> | ";
				echo "<a href='/bookstore/home/login/reg.php'>注册</a> | ";
			}
		 ?>
		
		<a href='/bookstore/home/cart/indexcart.php'>购物车</a>
	</span>
</div>