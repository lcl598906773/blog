<!DOCTYPE html >
<!--[if IE 7]>					<html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en" xmlns:wb="http://open.weibo.com/wb">  <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />	
	
	<title>My Blog</title>
	
	<meta name="description" content="" />
	<meta name="author" content="" />	
	
	<link rel="icon" type="image/png" href="public/index/images/favicon.png" />
	
	<link rel="stylesheet" type="text/css" href="public/index/css/style.css" />
	<link rel="stylesheet" type="text/css" href="public/index/fancybox/jquery.fancybox.css" />
	<!-- HTML5 Shiv -->
	<script type="text/javascript" src="public/index/js/modernizr.custom.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 <link rel="stylesheet" href="public/admin/md/examples/css/style.css" />
    <link rel="stylesheet" href="public/admin/md/css/editormd.preview.css" />
    <!-- <link rel="shortcut icon" href="https://pandao.github.io/editor.md/favicon.ico" type="image/x-icon" /> -->
    <style>
        .editormd-html-preview {
            width: 90%;
            margin: 0 auto;
        }
    </style>
    <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
</head>
<body class="style-1">
	
<div class="wrap">

	<!-- - - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - - -->	
	<?php include 'cache/index/index/header_html.php';?>
	
	<!-- - - - - - - - - - - - - - - Container - - - - - - - - - - - - - - - - -->	
	
	<section class="container sbr clearfix">
		
		<!-- - - - - - - - - - Page Header - - - - - - - - - - -->	
		
		<div class="page-header">
			
			<h1 class="page-title">Blog Detailed</h1>
			
		</div><!--/ .page-header-->
		
		<!-- - - - - - - - - end Page Header - - - - - - - - - -->	
		

		<!-- - - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->		
		
		<section id="content">
			
			<article class="post clearfix">
				<?php if(!empty($data)):?>
				<?php foreach($data as $value): ?>
				<h3 class="title">
					<?=$value['title']; ?>
				</h3><!--/ .title -->
				
				<section class="post-meta clearfix">
					<div class="post-date"><a href="#"><?php echo date('Y/m/d',$value['addtime']);?></a></div><!--/ .post-date-->
					<div class="post-tags">
						<a href="#">News</a>
						<a href="#">Events</a>
						<a href="#">People</a>
					</div><!--/ .post-tags-->
					<div class="post-comments"><a href="#"><?=$value['replycount']; ?> Comments</a></div><!--/ .post-comments-->
				</section><!--/ .post-meta-->
				<a class="single-image" href="">
					<img class="custom-frame" alt="" src="<?=$value['icon']; ?>" />
				</a>
					<p> 
					    <div id="test-editormd-view2">
					       <textarea id="append-test" style="display:none;"><?php echo stripcslashes($value['content']);?></textarea>
					    </div>
					</p>
			<?php endforeach;?>
			<?php endif;?>
			</article><!--/ .post-->
			<wb:like appkey="3K59kz"></wb:like><wb:share-button appkey="2321227511" addition="number" type="button"></wb:share-button>
			<!-- JiaThis Button BEGIN -->
				<div class="jiathis_style_32x32">
					<a class="jiathis_button_qzone"></a>
					<a class="jiathis_button_tsina"></a>
					<a class="jiathis_button_tqq"></a>
					<a class="jiathis_button_weixin"></a>
					<a class="jiathis_button_renren"></a>
					<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
					<a class="jiathis_counter_style"></a>
				</div>
				<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
				<!-- JiaThis Button END -->
			<?php if(!empty($result)):?>
			<section id="comments">
				
				<h5 style="text-align: left"><?=$value['replycount']; ?> Comments</h5>
				<ol class="comments-list">
				<?php foreach($result as $comment): ?>
					<li class="comment">
						<article>
							<img src="public/index/images/gravatar.png" alt="avatar" class="avatar" />
							<div class="comment-entry">
								<div class="comment-meta">
									<h6 class="author" style="text-align: left"><a href="#">id:<?=$comment['authorid']; ?>&nbsp;</a></h6>
									<p class="date" style="width: 500px;text-align: left"><?php echo date('Y/m/d',$comment['replytime']);?></p>
								</div><!--/ .comment-meta -->
								<div class="comment-body"style="text-align: left">
									<p>
										<?=$comment['content']; ?>
									</p>
								</div><!--/ .comment-body -->
							</div><!--/ .comment-entry-->
						</article>
					</li><!--/ .comment-->
					<?php endforeach;?>
				
				</ol><!--/ .comments-list-->

			</section>
			<?php endif;?>
			<section id="respond">

				<h5 style="text-align: left">Leave a Comment</h5>

				<form action="index.php?c=index&a=leaveComment&id=<?=$value['id']; ?>" method="post" id="commentform" />
					<fieldset class="textarea-block">
						<label for="comment-message"><strong>Message</strong></label>
						<textarea name="message" style="text-align: left;margin-left:-150px;"id="comment-message" cols="50" rows="4" required></textarea>
					</fieldset>
					
					<input type="submit" class="button gray" value="Submit Comment &rarr;" />

					<div class="clear"></div>

				</form>

			</section><!--/ #respond-->

			
		</section><!--/ #content-->
		
		<!-- - - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - - -->	
		
		
		<!-- - - - - - - - - - - - - - - Sidebar - - - - - - - - - - - - - - - - -->	
		
		<aside id="sidebar">
			
			
			
			<div class="widget-container widget_testimonials">
				
				<h3 class="widget-title"></h3>
				
				<div class="testimonials">
					
					<div class="substrate-rotate-left"></div>
					<div class="substrate-rotate-right"></div>
					
					<div class="quoteBox">
						
						<ul class="quotes">
							<li>
								<div class="quote-text">
									Suspendisse potenti. Praesent sit amet rhoncus nisi. Etiam tristique velit 
									ut felis ultrices pulvinar. condimentum.
								</div><!--/ .quote-text-->
								<div class="quote-author">
									Jessica Spenser
									<span>Manager</span>
								</div><!--/ .quote-author-->							
							</li>
							<li>
								<div class="quote-text">
									Proin nonummy, lacus eget pulvinar lacinia, pede felis dignissim leo, vitae tristique. 
									Nullam ornare. Praesent odio ligula, dapibus sed.
								</div><!--/ .quote-text-->
								<div class="quote-author">
									James Brown
									<span>Director</span>
								</div><!--/ .quote-author-->							
							</li>							
						</ul><!--/ .quotes-->
						
					</div><!--/ .quoteBox-->
					
				</div><!--/ .testimonials-->
				
			</div><!--/ .widget-container-->
			
		</aside><!--/ #sidebar-->
		
		<!-- - - - - - - - - - - - - end Sidebar - - - - - - - - - - - - - - - - -->
		
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
<script src="js/custom.js"></script>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
<script src="public/admin/md/examples/js/jquery.min.js"></script>
<script src="public/admin/md/lib/marked.min.js"></script>
<script src="public/admin/md/lib/prettify.min.js"></script>

<script src="public/admin/md/lib/raphael.min.js"></script>
<script src="public/admin/md/lib/underscore.min.js"></script>
<script src="public/admin/md/lib/sequence-diagram.min.js"></script>
<script src="public/admin/md/lib/flowchart.min.js"></script>
<script src="public/admin/md/lib/jquery.flowchart.min.js"></script>

<script src="public/admin/md/editormd.js"></script>
<script type="text/javascript">
    $(function() {
        var testEditormdView2;
        testEditormdView2 = editormd.markdownToHTML("test-editormd-view2", {
            htmlDecode      : "style,script,iframe",  // you can filter tags decode
            emoji           : true,
            taskList        : true,
            tex             : true,  // 默认不解析
            flowChart       : true,  // 默认不解析
            sequenceDiagram : true,  // 默认不解析
        });
    });
</script>
</html>

