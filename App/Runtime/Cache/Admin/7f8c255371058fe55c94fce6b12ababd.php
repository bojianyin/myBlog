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
		<form action="<?php echo U(GROUP_NAME.'/Tx/upload');?>" enctype="multipart/form-data" method="post">
			<div>
				<label for="">当前用户</label><input type="text" value="<?php echo ($_SESSION['uname']); ?>" readonly="readonly" />
			</div>
			<div id="tx">
				<label for="">请选择你的头像</label><input type="file" name="file" id="test" />
			</div>
			<input type="hidden" name="uid" value="<?php echo ($_SESSION['uid']); ?>" />
			<input type="submit" value="确认" />
		</form>
	</body>
	<script src="__PUBLIC__/layui/layui.js" charset="utf-8"></script>
	<script>
		$("#test").change(function(){
			$("#tx").find("img").remove()
			var imgUrl = window.URL.createObjectURL($(this)[0].files[0]);
            var img = document.createElement("img");
            img.setAttribute("src", imgUrl);
            tx.appendChild(img);
		})
	</script>
</html>