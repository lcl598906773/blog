<!DOCTYPE html>
<!--[if IE 7]>					<html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />	
	
	<title>My Blog | Elements</title>
	
	<meta name="description" content="" />
	<meta name="author" content="" />	
	
	<link rel="icon" type="image/png" href="public/index/images/favicon.png" />
	

	<!-- HTML5 Shiv -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body class="style-1">
	
<div class="wrap-header"></div><!--/ .wrap-header-->

<div class="wrap">
	
	<!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->	
	
	<header id="header" class="clearfix">
		
		<a href="index.php" id="logo"><img src="public/index/images/logo.png" alt="" title="Logo" /></a>
		
		<ul class="social-links clearfix">
			
			<iframe allowtransparency="true" frameborder="0" width="385" height="80" scrolling="no" src="//tianqi.2345.com/plugin/widget/index.htm?s=1&z=1&t=0&v=0&d=3&bd=0&k=&f=&q=1&e=1&a=1&c=54511&w=385&h=96&align=center"></iframe>
<!-- 			<li class="facebook"><a href="#">Facebook<span></span></a></li>
			<li class="dribbble"><a href="#">Dribbble<span></span></a></li>
			<li class="vimeo"><a href="#">Vimeo<span></span></a></li>
			<li class="youtube"><a href="#">YouTube<span></span></a></li>
			<li class="rss"><a href="#">Rss<span></span></a></li> -->
		</ul><!--/ .social-links-->
		
		<nav id="navigation" class="navigation">
			
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php?c=index&a=about">About</a></li>
				<li><a href="index.php?c=article&a=blog">Blog</a>
				</li>
				<li><a href="index.php?c=index&a=gallery">Gallery</a></li>
				<li><a href="index.php?c=index&a=contacts">Contact</a></li>
			</ul>
			<?php if(empty($_SESSION['uid'])):?>
				<a href="index.php?c=index&a=wblogin"><img src="public/index/images/weibo_login.png" style="width: 30px;height: 30px;margin-left: 230px;margin-top:15px;"></a>
				<a href="index.php?m=index&c=user&a=register" target="" class="donate">Register</a>
				<a href="index.php?m=index&c=user&a=login"target=""  class="donate">Login</a>

			<?php else:?>
				<?php if(!empty($_SESSION['level']) && $_SESSION['level'] == 1 ):?>
						<a href="index.php?m=admin&c=user&a=login" target= "_blank"  class="donate">管理</a>
				<?php endif;?>
				<!-- <a href="index.php?m=index&c=user&a=logout"  class="donate">退出</a> -->
				<?php if(!empty($_COOKIE['accesstoken'])):?>
					
					<a href="index.php?m=index&c=user&a=logout"  class="donate">退出</a>
					<a href=""  class="donate"><?=$_SESSION['username']; ?></a>
				<?php else:?>

					
					<a href="index.php?m=index&c=user&a=logout"  class="donate">退出</a>
					<a href=""  class="donate"><?=$_SESSION['username']; ?></a>
				<?php endif;?>
			<?php endif;?>

			
		</nav><!--/ #navigation-->
		
	</header><!--/ #header-->
	</div>
</body>
</html>
