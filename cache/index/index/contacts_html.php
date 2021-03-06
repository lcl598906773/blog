<!DOCTYPE html>
<!--[if IE 7]>					<html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />	
	
	<title>My Blog | Contacts</title>
	
	<meta name="description" content="" />
	<meta name="author" content="" />	
	
	<link rel="icon" type="image/png" href="public/index/images/favicon.png" />
	
	<link rel="stylesheet" type="text/css" href="public/index/css/style.css" />

	<!-- HTML5 Shiv -->
	<script type="text/javascript" src="public/index/js/modernizr.custom.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body class="style-1">
	

<div class="wrap">
	
	<!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->	
	<?php include 'cache/index/index/header_html.php';?>

	
	<!-- - - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - - -->	
	
	
	<!-- - - - - - - - - - - - - - - Container - - - - - - - - - - - - - - - - -->	
	
	<section class="container clearfix">
		
		<!-- - - - - - - - - - Page Header - - - - - - - - - - -->	
		
		<div class="page-header">
			
			<h1 class="page-title">Contact</h1>
			
		</div><!--/ .page-header-->
		
		<!-- - - - - - - - - end Page Header - - - - - - - - - -->	
		
		
		<!-- - - - - - - - - Map - - - - - - - - -->	
		
	
		<!-- - - - - - - - end Map - - - - - - - -->
		
		
		<div class="one-third">
			
			<h3>Main Office</h3>
			
			<address>
				Address:   Beijing China <br />
				Phone:       <?=$data[0]['phone']; ?><br />
				weibo:       
				&nbsp;&nbsp;  <a href="<?=$data[0]['weibo']; ?>" target="_blank">sina</a><br />
				Email:         <?=$data[0]['email']; ?><br />
				Intro:		<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$data[0]['intro']; ?>
			</address>
			
		</div><!--/ .one-third-->
		
		<div class="two-third last">
			
			<div id="contact">
			
				<h3>Send an Email</h3>
				
				<form action="index.php?c=index&a=docontacts" class="contact-form" id="contactform" method="post" />

					<p class="input-block">
						<label for="name">Your Name: <span class="required">*</span><i>(required)</i></label>
						<input type="text" name="name" id="name" />
					</p>

					<p class="input-block">
						<label for="email">E-mail: <span class="required">*</span><i>(required)</i></label>
						<input type="text" name="email" id="email" />
					</p>

					<p class="textarea-block">
						<label for="message">Message:</label>
						<textarea name="comments" id="message"></textarea>	
					</p>
					
					<p class="input-block">
						<iframe src="" height="30" scrolling="no" frameborder="0" marginheight="0" marginwidth="0" class="capcha_image_frame" name="capcha_image_frame"></iframe>
					</p>						
					
					<p class="row">
						<button type="submit" class="button gray" id="submit">Send</button>
					</p>
							
				</form>	<!--/ #contactform-->
				
			</div><!--/ contact-->
			
		</div><!--/ .two-third .last-->
	
	</section><!--/.container -->
		
	<!-- - - - - - - - - - - - - end Container - - - - - - - - - - - - - - - - -->	
	
	
	<!-- - - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->	
	
	<?php include 'cache/index/index/footer_html.php';?>
	
	<!-- - - - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - - -->		
	
</div><!--/ .wrap-->
	

<script type="text/javascript" src=""></script>	
<script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>
<!--[if lt IE 9]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
	<script src="js/ie.js"></script>
<![endif]-->
<script src=""></script>
<script src="js/jquery.gmap.min.js"></script>
<script src="js/custom.js"></script>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>

