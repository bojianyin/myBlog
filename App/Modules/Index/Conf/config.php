<?php
	return array(
		//自定义标签	
		"APP_AUTOLOAD_PATH"=>"@.TagLib"
		,'TAGLIB_BUILD_IN'=>"Cx,Hd"
		
		//开启静态缓存
		,"HTML_CACHE_ON"=>true
		,"HTML_CACHE_RULES"=>array(
			'Show:index'=>array('{:module}_{:action}_{id}',10),
		),
	);
?>