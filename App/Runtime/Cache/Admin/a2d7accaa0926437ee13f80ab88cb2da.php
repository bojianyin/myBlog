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
  					<legend>行边框表格</legend>
  				
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
				      <th>cate</th>
				      <th>排序</th>
				      <th>level</th>
				      <th>操作</th>
				    </tr> 
				  </thead>
				  <tbody>
				  	<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><tr>
				      <td><?php echo ($v["id"]); ?></td>
				      <td><?php echo ($v["html"]); echo ($v["name"]); ?></td>
				      <td>
				      	<input type="number" value="<?php echo ($v["sort"]); ?>" name="sort[<?php echo ($v["id"]); ?>]"/>
				      </td>
				      <td>
				      	<?php echo ($v["level"]); ?>
				      </td>
				      <td>
				      	[<a href="<?php echo U(GROUP_NAME.'/Category/addCate',array('pid'=>$v['id']));?>">添加子分类</a>]
				      	[<a href="">删除</a>]
				      	[<a href="">修改</a>]
				      </td>
				      
				    </tr><?php endforeach; endif; ?>
				  </tbody>
				</table>   
  				
				</fieldset>  
 				<input class="layui-btn btn btn-default" value="排序" type="submit"/>
 </form>
				
		
		<script src="__PUBLIC__/layui/layui.js" charset="utf-8"></script>
	</body>
</html>