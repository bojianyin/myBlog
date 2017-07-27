<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="__PUBLIC__/css/scrollBar.css" />
		<link rel="stylesheet" href="__PUBLIC__/layui/css/layui.css" />
		<script src="__PUBLIC__/js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/zUI.js"></script>
		<style>
			.layui-form-item input[type=submit]{
				margin-left:50px
			}
		</style>
		<script>
			$(function(){
				$("#container").panel({iWheelStep:32});
			});
		</script>
	</head>
	<body>
		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
		  <legend>添加分类</legend>
		  <form class="layui-form" action="<?php echo U(GROUP_NAME.'/Category/addCateHandler');?>" method="post">
		  <div class="layui-form-item">
		    <label class="layui-form-label">分类名称</label>
		    <div class="layui-input-block">
		      <input type="text" name="name" lay-verify="title" placeholder="请输入分类" class="layui-input">
		    </div>
		  </div>
		  <div class="layui-form-item">
		    <label class="layui-form-label">排序</label>
		    <div class="layui-input-block">
		      <input type="number" name="sort" lay-verify="sort" value="50" class="layui-input">
		    </div>
		  </div>
		  <div class="layui-form-item">
		  	<input type="hidden" name="pid" value="<?php echo ($pid); ?>"/>
		    <input type="submit" class="layui-btn btn layui-btn-primary" lay-submit="" value="保存添加" />
		  </div>
		
		</form>
		</fieldset>
	</body>
	<script src="__PUBLIC__/layui/layui.js" charset="utf-8"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
layui.use(['form'], function(){
  var form = layui.form();
  //自定义验证规则
  form.verify({
    title: function(value){
      if(value==""){
        return '分类名称不能为空';
      }
    }
  });
});
</script>
</html>