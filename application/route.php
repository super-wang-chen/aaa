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

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '__domain__'=>[
    	'1109dwzadmin.wh.001.hgidc.com' => 'admin', //后台完整域名地址，修改前面的一项“1109dwzadmin.wh.001.hgidc.com”
    	'admin' => 'admin', //后台二级地址，修改前面的admin
    ],
  	'[new]'=>[
  		':id'   => ['index/index', ['method' => 'get']],
  		':name' => ['index/add_url', ['method' => 'post']],
  	],
  	'[goods]'=>[
  		':id'   => ['goods/show', ['method' => 'get']],
  	]

];
