<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [

    '[adds]'=>[
        'addone'=>['mongodb/Address/insertOne',['method'=>'get']],
        'addmany'=>['mongodb/Address/insertMany',['method'=>'get']],
        'findone'=>['mongodb/Address/findOne',['method'=>'get']],
        'findmany'=>['mongodb/Address/findMany',['method'=>'get']],
    ],

    '__miss__'=>'index/index/index',
];
