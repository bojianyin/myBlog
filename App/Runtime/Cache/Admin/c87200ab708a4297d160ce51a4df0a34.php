<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="__PUBLIC__/layui/css/layui.css" />
		<script src="__PUBLIC__/js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/zUI.js"></script>
	</head>
	<body>
	<form action="<?php echo isset($_GET['id'])?$updateUrl:$saveUrl;?>" method="post">
		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
			<legend><?php echo isset($_GET['id'])?'修改':'添加'?>博文</legend>
			<div class="layui-form">
				<label for="layui-form-label">
					博文标题:
				</label>
				<div class="layui-input-inline">
					<input type="text" class="layui-input layui-inline" name="title" value="<?php echo ($blogInfo['title']); ?>"/>
				</div>
			</div>
			<div class="layui-form">
				<label for="layui-form-label">
					所属分类:
				</label>
				<div class="layui-input-inline">
					<select name="cid" id="" class="layui-select">
						<option value="">请选择分类</option>
						<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v['id']); ?>" <?php echo ($blogInfo['cid']==$v['id']?'selected':''); ?>><?php echo ($v['html']); echo ($v['name']); ?></option><?php endforeach; endif; ?>
					</select>
				</div>
			</div>
			<div class="layui-form">
				<label for="layui-form-label">
					属性:
				</label>
				<div class="layui-input-inline">
					<div class="layui-input-block">
						<?php if(is_array($attr)): foreach($attr as $key=>$v): ?><input type="checkbox" name="aid[]" value="<?php echo ($v['id']); ?>" title="<?php echo ($v["name"]); ?>"
				      			<?php
 foreach($blogInfo['attr'] as $item){ if($item['id']==$v['id']){ echo "checked"; } } ?>
				      		><?php endforeach; endif; ?>
					</div>
				</div>
			</div>
			<div class="layui-form">
				<label for="layui-form-label">
					博文内容:
				</label>
				<div class="layui-input-inline">
					<textarea name="content"><?php echo ($blogInfo['content']); ?></textarea>
				</div>
			</div>
			<input type="hidden" name="click" value="<?php echo ($blogInfo['click']); ?>"/>
		</fieldset>
 		<input class="layui-btn btn btn-default" value="<?php echo isset($_GET['id'])?'保存修改':'发布'?>" type="submit"/>
 	</form>
				
		
		<script src="__PUBLIC__/layui/layui.js" charset="utf-8"></script>
	</body>
	<script>
		layui.use(['form'],function(form){
			var form=form();
		})
	</script>
</html>