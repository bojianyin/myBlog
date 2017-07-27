<?php if (!defined('THINK_PATH')) exit();?>	<!doctype html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<meta name="renderer" content="webkit">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/nprogress.css">
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css">
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome.min.css">
		<link rel="apple-touch-icon-precomposed" href="__PUBLIC__/__PUBLIC__/images/icon.png">
		<link rel="shortcut icon" href="__PUBLIC__/__PUBLIC__/images/favicon.ico">
		<script src="__PUBLIC__/js/jquery-2.1.4.min.js"></script>
		<script src="__PUBLIC__/js/nprogress.js"></script>
		<script src="__PUBLIC__/js/jquery.lazyload.min.js"></script>
		<style type="text/css">
			.nav>li>a{
				position: relative;
			}
			.nav>li:hover .cheng{
				display: block;
			}
			.cheng{
				width:100px;height:auto;position:absolute;top:50px;left:0;z-index: 10;display:none;
			}
			.cheng>ul{
				padding:5px;
			}
			.cheng>ul>li{
				height:20px;line-height: 20px;text-align: center;color:#fff;background:#000;
			}
		</style>
		<!--[if gte IE 9]>
		  <script src="__PUBLIC__/js/jquery-1.11.1.min.js" type="text/javascript"></script>
		  <script src="__PUBLIC__/js/html5shiv.min.js" type="text/javascript"></script>
		  <script src="__PUBLIC__/js/respond.min.js" type="text/javascript"></script>
		  <script src="__PUBLIC__/js/selectivizr-min.js" type="text/javascript"></script>
		<![endif]-->
		<!--[if lt IE 9]>
		  <script>window.location.href='upgrade-browser.html';</script>
		<![endif]-->
	</head>

	<body class="user-select">
		<header class="header">
			<nav class="navbar navbar-default" id="navbar">
				<div class="container">
					<div class="header-topbar hidden-xs link-border">
						<ul class="site-nav topmenu">
							<li>
								<a href="#">标签云</a>
							</li>
							<li>
								<a href="#" rel="nofollow">读者墙</a>
							</li>
							<li>
								<a href="#" title="RSS订阅">
									<i class="fa fa-rss">
									</i> RSS订阅
								</a>
							</li>
						</ul>
						勤记录 懂分享</div>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar" aria-expanded="false"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
						<h1 class="logo hvr-bounce-in"><a href="#" title="木庄网络博客"><img src="__PUBLIC__/images/201610171329086541.png" alt="木庄网络博客"></a></h1>
					</div>
					<div class="collapse navbar-collapse" id="header-navbar">
						<form class="navbar-form visible-xs" action="/Search" method="post">
							<div class="input-group">
								<input type="text" name="keyword" class="form-control" placeholder="请输入关键字" maxlength="20" autocomplete="off">
								<span class="input-group-btn">
		<button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
		</span> </div>
						</form>
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a data-cont="木庄网络博客" title="木庄网络博客" href="index.html">首页</a>
							</li>
											<?php
 $cate=M("cate")->order("sort")->select(); import("Class.Category",APP_PATH); $cate=Category::unlimArray($cate); foreach($cate as $v): extract($v); ?><li>
									<a data-cont="" title="" href=""><?php echo ($name); ?></a>
									<?php if($child): ?><div class="cheng">
											<ul>
												<?php if(is_array($child)): foreach($child as $key=>$result): ?><li><?php echo ($result['name']); ?></li><?php endforeach; endif; ?>
											</ul>
										</div><?php endif; ?>
								</li><?php endforeach ?>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<section class="container">
			<div class="content-wrap">
				<div class="content">
					<div id="focusslide" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#focusslide" data-slide-to="0" class="active"></li>
							<li data-target="#focusslide" data-slide-to="1"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<a href="#" target="_blank" title="木庄网络博客源码">
									<img src="__PUBLIC__/images//201610181557196870.jpg" alt="木庄网络博客源码" class="img-responsive"></a>
							</div>
							<div class="item">
								<a href="#" target="_blank" title="专业网站建设">
									<img src="__PUBLIC__/images//201610241227558789.jpg" alt="专业网站建设" class="img-responsive"></a>
							</div>
						</div>
						<a class="left carousel-control" href="#focusslide" role="button" data-slide="prev" rel="nofollow"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">上一个</span> </a>
						<a class="right carousel-control" href="#focusslide" role="button" data-slide="next" rel="nofollow"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">下一个</span> </a>
					</div>
					<article class="excerpt-minic excerpt-minic-index">
						<h2><span class="red">【推荐】</span><a target="_blank" href="#" title="用DTcms做一个独立博客网站（响应式模板）" >用DTcms做一个独立博客网站（响应式模板）</a>
		</h2>
						<p class="note">用DTcms做一个独立博客网站（响应式模板），采用DTcms V4.0正式版（MSSQL）。开发环境：SQL2008R2+VS2010。DTcms V4.0正式版功能修复和优化：1、favicon.ico图标后台上传。（解决要换图标时要连FTP或者开服务器的麻烦）</p>
					</article>
					<div class="title">
						<h3>最新发布</h3>
						<div class="more">
							<a href="#" title="MZ-NetBlog主题">MZ-NetBlog主题</a>
							<a href="#" title="IT技术笔记">IT技术笔记</a>
							<a href="#" title="源码分享">源码分享</a>
							<a href="#" title="靠谱网赚">靠谱网赚</a>
							<a href="#" title="资讯分享">资讯分享</a>
						</div>
					</div>
					<?php if(is_array($blogs)): foreach($blogs as $key=>$v): ?><article class="excerpt excerpt-1" style="">
							<h1><?php echo ($v['name']); ?></h1> <a href="<?php echo U('/List/'.$v['id']);?>" style="float: right;">更多>></a>
							<?php if(is_array($v["blog"])): foreach($v["blog"] as $key=>$val): ?><p><a href="<?php echo U('/Detail/'.$val['id']);?>"><?php echo ($val['title']); ?></a><span><?php echo date('Y-m-d',$val['createtime']);?></span></p><?php endforeach; endif; ?>
						</article><?php endforeach; endif; ?>
				</div>
			</div>
			<aside class="sidebar">
				<div class="fixed">
					<div class="widget widget-tabs">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active">
								<a href="#notice" aria-controls="notice" role="tab" data-toggle="tab">统计信息</a>
							</li>
							<li role="presentation">
								<a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">联系站长</a>
							</li>
						</ul>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane contact active" id="notice">
								<h2>日志总数:
			  888篇
		  </h2>
								<h2>网站运行:
		  <span id="sitetime">88天 </span></h2>
							</div>
							<div role="tabpanel" class="tab-pane contact" id="contact">
								<h2>QQ:
			  <a href="" target="_blank" rel="nofollow" data-toggle="tooltip" data-placement="bottom" title=""  data-original-title="QQ:"></a>
		  </h2>
								<h2>Email:
		  <a href="#" target="_blank" data-toggle="tooltip" rel="nofollow" data-placement="bottom" title=""  data-original-title="#"></a></h2>
							</div>
						</div>
					</div>
					<div class="widget widget_search">
						<form class="navbar-form" action="/Search" method="post">
							<div class="input-group">
								<input type="text" name="keyword" class="form-control" size="35" placeholder="请输入关键字" maxlength="15" autocomplete="off">
								<span class="input-group-btn">
		<button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
		</span> </div>
						</form>
					</div>
				</div>
				
				<?php echo W("Hot");?>
				<div class="widget widget_sentence">
			<a href="#" target="_blank" rel="nofollow" title="专业网站建设">
				<img style="width: 100%" src="__PUBLIC__/images//201610241224221511.jpg" alt="专业网站建设"></a>
		</div>
		<div class="widget widget_sentence">
			<a href="#" target="_blank" rel="nofollow" title="MZ-NetBlog主题">
				<img style="width: 100%" src="__PUBLIC__/images/ad.jpg" alt="MZ-NetBlog主题"></a>
		</div>
				
				<div class="widget widget_sentence">
					<h3>友情链接</h3>
					<div class="widget-sentence-link">
						<a href="#" title="网站建设" target="_blank">网站建设</a>&nbsp;&nbsp;&nbsp;
					</div>
				</div>
			</aside>
		</section>
	<footer class="footer">
<div class="container">
<p>Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a> </p>
</div>
<div id="gotop"><a class="gotop"></a></div>
</footer>
<script src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/jquery.ias.js"></script>
<script src="__PUBLIC__/js/scripts.js"></script>
</body>
</html>