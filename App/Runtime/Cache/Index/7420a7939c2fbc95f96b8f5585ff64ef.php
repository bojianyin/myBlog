<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
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
	<a href="<?php echo U('/');?>">首页</a>>
	<?php $count=count($list)-1;?>
	<?php if(is_array($list)): foreach($list as $key=>$v): if($count != $key): ?><a href="<?php echo U('List/'.$v['id']);?>"><?php echo ($v['name']); ?></a><?php else: ?><span><?php echo ($v['name']); ?></span><?php endif; if(($$count) != $key): ?>><?php endif; endforeach; endif; ?>
	
<div class="content-wrap">
<div class="content">
	
  <div class="title">
	<h3 style="line-height: 1.3">MZ-NetBlog主题</h3>
  </div>
  
  <?php if(is_array($data)): foreach($data as $key=>$v): ?><article class="excerpt excerpt-1"><a class="focus" href="#" title="用DTcms做一个独立博客网站（响应式模板）" target="_blank" ><img class="thumb" data-original="images/201610181739277776.jpg" src="images/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: inline;"></a>
				<h1><?php echo ($v['name']); ?></h1>
				<p>
					<h3><?php echo ($v['title']); ?></h3>					
					<span>已被点击 <?php echo ($v['click']); ?>次</span>
					<time><?php echo date('Y-m-d',$v['createtime']);?></time>
					<a href="<?php echo U('Detail/'.$v['id']);?>">详情</a>
				</p>
	  </article><?php endforeach; endif; ?>
  
</div>
</div>
<aside class="sidebar">
<div class="fixed">
  <div class="widget widget_search">
	<form class="navbar-form" action="/Search" method="post">
	  <div class="input-group">
		<input type="text" name="keyword" class="form-control" size="35" placeholder="请输入关键字" maxlength="15" autocomplete="off">
		<span class="input-group-btn">
		<button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
		</span> </div>
	</form>
  </div>
  <div class="widget widget_sentence">
	<h3>标签云</h3>
	<div class="widget-sentence-content">
		<ul class="plinks ptags">                
			<li><a href="#list/67/" title="移动统计" draggable="false">移动统计 <span class="badge">1</span></a></li>                
			<li><a href="#list/256/" title="404" draggable="false">404 <span class="badge">1</span></a></li>      
			<li><a href="#list/252/" title="VS2010" draggable="false">VS2010 <span class="badge">1</span></a></li>                
			<li><a href="#list/162/" title="杀毒软件" draggable="false">杀毒软件 <span class="badge">1</span></a></li>                
			<li><a href="#list/133/" title="html标签" draggable="false">html标签 <span class="badge">1</span></a></li>                
			<li><a href="#list/49/" title="循环" draggable="false">循环 <span class="badge">2</span></a></li>                
			<li><a href="#list/22/" title="百度统计" draggable="false">百度统计 <span class="badge">2</span></a></li>                
			<li><a href="#list/132/" title="sql" draggable="false">sql <span class="badge">6</span></a></li>                
		</ul>
	</div>
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