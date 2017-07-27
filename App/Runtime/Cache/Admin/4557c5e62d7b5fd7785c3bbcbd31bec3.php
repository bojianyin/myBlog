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
<form action="<?php echo U(GROUP_NAME.'/Category/sortHandler');?>" method="post">
				<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
  					<legend>属性</legend>
  				
  					<table class="layui-table" lay-skin="line">
				  <colgroup>
				    <col width="150">
				    <col width="150">
				    <col width="200">
				    <col>
				  </colgroup>
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>属性</th>
				      <th>颜色</th>
				      <th>操作</th>
				    </tr> 
				  </thead>
				  <tbody>
				  	<?php if(is_array($attr)): foreach($attr as $key=>$v): ?><tr>
				      <td>
				      	<input type="text" value="<?php echo ($v["id"]); ?>" readonly="readonly"/>
				      </td>
				      <td>
				      	<input type="text" value="<?php echo ($v["name"]); ?>" readonly="readonly"/>
				      </td>
				      <td>
				      	<div style="width:20px;height:20px;background:<?php echo ($v['color']); ?>"></div>
				      </td>
				      <td>
				      	[<a href="">修改</a>]
				      	[<a href="">删除</a>]
				      </td>
				    </tr><?php endforeach; endif; ?>
				  </tbody>
				</table>   
  				
				</fieldset>  
 </form>
				
		
		<script src="__PUBLIC__/layui/layui.js" charset="utf-8"></script>
	</body>
</html>