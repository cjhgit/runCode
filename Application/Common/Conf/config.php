<?php
return array(
    // 路由
    'URL_ROUTER_ON'   => true,
    'URL_ROUTE_RULES'=> array(
        'article/:id\d'          => '/Article/detail/id/:id\d',
        'about'          => 'Article/detail/id/1',
        'my' => 'Article/detail/id/1',//静态地址路由
        'product/:category\d/:id\d'=>'Products/Show', //规则路由
    ),
    'URL_MODEL' => '2',
    // 允许访问的模块列表
    'MODULE_ALLOW_LIST'  => array('Home','Admin','User'),
    'DEFAULT_MODULE' => 'Home',  // 默认模块

    // 数据库配置信息
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'code', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '123456', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'code_', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增

    'URL_CASE_INSENSITIVE' => true,

    'SHOW_ERROR_MSG' =>true,
    'APP_DEBUG' => true,
    //'DB_FIELD_CACHE' => false,
    //'HTML_CACHE_ON' => false,// 默认关闭静态缓存
    //'ACTION_CACHE_ON' => false, // 默认关闭Action 缓存
);