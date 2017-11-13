<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 系统行为定义
return [
    'module_init' => [
        'app\\common\\behavior\\Token'
    ],
    'view_filter'   => [
        'app\\common\\behavior\\Token'
    ],
    'app_end'   => [
        'app\\common\\behavior\\Token'
    ]
];