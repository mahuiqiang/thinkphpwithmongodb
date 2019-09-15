<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Headers:token,content-type,sign');
define('APP_PATH', __DIR__ . '/../app/');
define('CONF_PATH','../config/');

// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
