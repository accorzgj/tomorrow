<?php
return array(
	//'配置项'=>'配置值'
	'DB_CONFIG' => array(
    'DB_DEPLOY_TYPE'=> 1,
    	'DB_TYPE'   => 'mysql', // 数据库类型
        'DB_HOST'   => 'localhost,localhost', // 服务器地址
        'DB_NAME'   => 'wanted_findjob_misc', // 数据库名
        'DB_USER'   => 'zhanggangjing', // 用户名
        'DB_PWD'    => 'zhanggangjing', // 密码
        'DB_PORT'   => '3306,3307', //
		//'DB_RW_SEPARATE'=>true
	),
	'HTML_CACHE_ON'     =>    true, // 开启静态缓存
	'HTML_CACHE_TIME'   =>    60, 
);