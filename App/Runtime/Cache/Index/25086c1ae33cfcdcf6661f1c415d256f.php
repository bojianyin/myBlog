<?php if (!defined('THINK_PATH')) exit();?><div class="widget widget_hot">
		<h3>最新评论文章</h3>
		<ul>
			<?php if(is_array($blog)): foreach($blog as $key=>$v): ?><li>
				<a title="" href="<?php echo U('/Detail/'.$v['id']);?>"><span class="thumbnail">
	<img class="thumb" data-original="__PUBLIC__/images/201610181739277776.jpg" src="__PUBLIC__/images/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">
</span><span class="text"><?php echo ($v['title']); ?></span><span class="muted"><i class="glyphicon glyphicon-time"></i>
	<?php echo date('Y-m-d H:i',$v['createtime']);?>
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i><?php echo ($v['click']); ?></span></a>
			</li><?php endforeach; endif; ?>
		</ul>
	</div>