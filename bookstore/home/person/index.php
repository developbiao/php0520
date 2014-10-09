<?php 
session_start();
$action=$_GET['action'];
include '../public/common/config.inc.php';
 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="../public/css/index.css">
</head>
<body>
	<div class="main">
		<?php 
			include "../public/header.php";
		 ?>	
		<div class="nav"></div>
		<div class="content">
			<div class="content-left">
				<p>个人中心</p>
				<ul>
					<li>|--<a href='index.php?action=show'>查看联系方式</a></li>
					<li>|--<a href='index.php?action=add'>添加联系方式</a></li>
					<li>|--<a href='index.php?action=order'>查看我的订单</a></li>
				</ul>	
			</div>
			<div class="content-right">
				<?php 
					switch ($action) {
						case 'show':
								include "show.php";
							break;

						case 'add':
								include "add.php";
							break;

						case 'order':
								include "order.php";
							break;
						case 'edit':
								include "edit.php";
							break;
						case 'shops':
								include "shops.php";
							break;
					}
				 ?>	
			</div>
			<div class="clear"></div>	
		</div>	
		<div class="nav"></div>
		<?php 
			include "../public/footer.php";
		 ?>	
	</div>
</body>
</html>