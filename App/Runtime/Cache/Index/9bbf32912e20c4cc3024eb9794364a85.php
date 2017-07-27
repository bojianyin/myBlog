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
	<?php if(is_array($list)): foreach($list as $key=>$v): if($count != $key): ?><a href="<?php echo U('List/'.$v['id']);?>"><?php echo ($v['name']); ?></a><?php else: ?><span><?php echo ($v['name']); ?></span><?php endif; if(($$count) == $key): ?>><?php endif; endforeach; endif; ?>
<div class="content-wrap">
<div class="content">
  <header class="article-header">
	<h1 class="article-title"><a href="#" title="用DTcms做一个独立博客网站（响应式模板）" >博文详情</a></h1>
	<div class="article-meta"> <span class="item article-meta-time">
	  <time class="time" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="发表时间：2016-10-14"><i class="glyphicon glyphicon-time"></i> <?php echo date('Y-m-d H:i',$data['createtime']);?></time>
	  </span>  <span class="item article-meta-views" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="点击数：<?php echo ($data['click']); ?>"><i class="glyphicon glyphicon-eye-open"></i> <?php echo ($data['click']); ?></span> <span class="item article-meta-comment" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="评论量"><i class="glyphicon glyphicon-comment"></i> 4</span> </div>
  </header>
  <article class="article-content">
	<p><?php echo ($data['title']); ?></p><br />
	博文内容：<span>
			<?php echo ($data['content']); ?>
	</span><br />
	<span>被点击次数:<?php echo ($data['click']); ?></span><br />
	<time><?php echo date('Y-m-d H:i',$data['createtime']);?></time><br />
	<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_tieba" data-cmd="tieba" title="分享到百度贴吧"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a></div>

		  <script>                  window._bd_share_config = { "common": { "bdSnsKey": {}, "bdText": "", "bdMini": "2", "bdMiniList": false, "bdPic": "", "bdStyle": "1", "bdSize": "32" }, "share": {} }; with (document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=0.js?cdnversion=' + ~(-new Date() / 36e5)];</script>
  </article>
  <div class="article-tags">标签：<a href="#list/2/" rel="tag" >DTcms博客</a><a href="#list/3/" rel="tag" >木庄网络博客</a><a href="#list/4/" rel="tag" >独立博客</a><a href="#list/5/" rel="tag" >修复优化</a>
	</div>
  
  <div class="title" id="comment">
	<h3>评论</h3>
  </div>
  <div id="respond">
		<form id="comment-form" name="comment-form" action="" method="POST">
			<div class="comment">
				<input name="" id="" class="form-control" size="22" placeholder="您的昵称（必填）" maxlength="15" autocomplete="off" tabindex="1" type="text">
				<input name="" id="" class="form-control" size="22" placeholder="您的网址或邮箱（非必填）" maxlength="58" autocomplete="off" tabindex="2" type="text">
				<div class="comment-box">
					<textarea placeholder="您的评论或留言（必填）" name="comment-textarea" id="comment-textarea" cols="100%" rows="3" tabindex="3"></textarea>
					<div class="comment-ctrl">
						<div class="comment-prompt" style="display: none;"> <i class="fa fa-spin fa-circle-o-notch"></i> <span class="comment-prompt-text">评论正在提交中...请稍后</span> </div>
						<div class="comment-success" style="display: none;"> <i class="fa fa-check"></i> <span class="comment-prompt-text">评论提交成功...</span> </div>
						<button type="submit" name="comment-submit" id="comment-submit" tabindex="4">评论</button>
					</div>
				</div>
			</div>
		</form>
		
	</div>
  <div id="postcomments">
	<ol id="comment_list" class="commentlist">        
	<li class="comment-content"><span class="comment-f">#2</span><div class="comment-main"><p><a class="address" href="#" rel="nofollow" target="_blank">木庄网络博客</a><span class="time">(2016/10/28 11:41:03)</span><br>不错的网站主题，看着相当舒服</p></div></li>
	<li class="comment-content"><span class="comment-f">#1</span><div class="comment-main"><p><a class="address" href="#" rel="nofollow" target="_blank">木庄网络博客</a><span class="time">(2016/10/14 21:02:39)</span><br>博客做得好漂亮哦！</p></div></li></ol>
  </div>
</div>
</div>
<aside class="sidebar">
<div class="fixed">
  <div class="widget widget-tabs">
	<ul class="nav nav-tabs" role="tablist">
	  <li role="presentation" class="active"><a href="#notice" aria-controls="notice" role="tab" data-toggle="tab" draggable="false">统计信息</a></li>
	  <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab" draggable="false">联系站长</a></li>
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
			  <a href="" target="_blank" rel="nofollow" data-toggle="tooltip" data-placement="bottom" title="" draggable="false" data-original-title="QQ:577211782">577211782</a>
		  </h2>
		  <h2>Email:
		  <a href="mailto:577211782@qq.com" target="_blank" data-toggle="tooltip" rel="nofollow" data-placement="bottom" title="" draggable="false" data-original-title="Email:577211782@qq.com">577211782@qq.com</a></h2>
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