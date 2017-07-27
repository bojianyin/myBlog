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
				<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
  					<legend>博文列表</legend>
  				
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
				      <th>博文标题</th>
				      <th>属性</th>
				      <th>博文内容</th>
				      <th>点击次数</th>
				      <th>所属分类</th>
				      <th>操作</th>
				    </tr> 
				  </thead>
				  <tbody>
				  	<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
				      <td>
				      	<?php echo ($v['id']); ?>
				      </td>
				      <td>
				      	<?php echo ($v['title']); ?>
				      </td>
				      <td>
				      	<?php if($v['attr']): if(is_array($v["attr"])): foreach($v["attr"] as $key=>$val): ?>[<a href="" style="color:<?php echo ($val['color']); ?>"><?php echo ($val['name']); ?></a>]<?php endforeach; endif; ?>
				      	<?php else: ?>
				      		暂无属性<?php endif; ?>
				      </td>
				      <td>
				      	<?php echo ($v['content']); ?>
				      </td>
				      <td>
				      	<?php echo ($v['click']); ?>
				      </td>
				      <td>
				      	<?php echo ($v['cate']['name']); ?>
				      </td>
				      <td>
				      	[<a href="<?php echo U(GROUP_NAME.'/Blog/deleteBlog',array('id'=>$v['id']));?>">删除</a>]
				      	[<a href="<?php echo U(GROUP_NAME.'/Blog/addBlog',array('id'=>$v['id']));?>">修改</a>]
				      </td>
				    </tr><?php endforeach; endif; ?>
				  </tbody>
				</table>   
				</fieldset>  
				
		
		<script src="__PUBLIC__/layui/layui.js" charset="utf-8"></script>
	</body>
</html>