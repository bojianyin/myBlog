<?php
return array(
	"APP_GROUP_LIST"=>"Admin,Index"
	,"DEFAULT_GROUP"=>"Index"
	,"APP_GROUP_MODE"=>1
	,"APP_GROUP_PATH"=>"Modules"
	,"URL_MODEL"=>1
	,"DEFAULT_FILTER"=>"htmlspecialchars"
	,"URL_HTML_SUFFIX"=>"",
	'DB_TYPE'               => 'mysql',     // 数据库类型
    'DB_HOST'               => 'localhost', // 服务器地址
    'DB_NAME'               => 'blog2',          // 数据库名
    'DB_USER'               => 'root',      // 用户名
    'DB_PWD'                => 'root',          // 密码
    'DB_PORT'               => '',        // 端口
    'DB_PREFIX'             => '',    // 数据库表前缀
    
    'URL_ROUTER_ON'=>true   //开启路由
	,'URL_ROUTE_RULES'=>array( //定义路由规则
	    'List/:id\d'=>'Index/List/index?id=:1'
	    ,'Detail/:id\d'=>'Index/Show/index?id=:1',
	),
);
?>