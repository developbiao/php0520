<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>mess</title>
	<style type="text/css">
		#show{
			width:100%;
			border:1px dotted blue;
		}
		#title{
			width:100%;
			height:30px;
			border:1px dashed red;
			overflow:auto;
		}
		#content{
			width:100%;
			height:200px;
			border:1px dashed red;
			overflow:auto;
		}
	</style>
</head>
<body>
	<div id="show">
		<div id="title">
		<!-- addslashes转义 and stripslashes-->
			<span>标题： <?php echo htmlspecialchars(stripslashes( $_GET['title']))?> </span>
		</div>
		<div id="content">
			<span><?php echo htmlspecialchars(addslashes($_GET['content']))?></span>
		</div>
	</div>
</body>
</html>