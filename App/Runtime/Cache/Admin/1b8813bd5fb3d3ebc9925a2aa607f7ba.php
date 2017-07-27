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
<form action="<?php echo U(GROUP_NAME.'/Attr/addAttrHandler');?>" method="post">
				<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
  					<legend>添加属性</legend>
  					<label for="ming" class="layui-form-label">属性名称:</label>
  					<input type="text" value="" class="layui-input layui-inline" name="name" id="ming"/>
  					<label for="cols" class="layui-form-label">属性颜色:</label>
  					<input type="color" value="" name="color" id="cols"/>
				</fieldset>  
 				<input class="layui-btn btn btn-default" value="保存添加" type="submit"/>
 </form>
				
		
		<script src="__PUBLIC__/layui/layui.js" charset="utf-8"></script>
	</body>
</html>