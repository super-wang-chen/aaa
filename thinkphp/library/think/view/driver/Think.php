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

namespace think\view\driver;

use think\App;
use think\exception\TemplateNotFoundException;
use think\Loader;
use think\Log;
use think\Request;
use think\Template;

class Think
{
    // 模板引擎实例
    private $template;
    // 模板引擎参数
    protected $config = [
        // 模板起始路径
        'view_path'   => '',
        // 模板文件后缀
        'view_suffix' => 'html',
        // 模板文件名分隔符
        'view_depr'   => DS,
        // 是否开启模板编译缓存,设为false则每次都会重新编译
        'tpl_cache'   => true,
    ];

//  public function __construct($config = [])
//  {
//      $this->config = array_merge($this->config, $config);
//      if (empty($this->config['view_path'])) {
//          $this->config['view_path'] = App::$modulePath . 'view' . DS;
//      }
//
//      $this->template = new Template($this->config);
//  }

public function __construct($config = [])
{
	$this->config = array_merge($this->config, $config);
	//增加手机版访问
	if($this->is_mobile()===true){
		if(isset($this->config['m_view_path'])){
			$this->config['view_path'] = $this->config['m_view_path'];
		}
	}
	//-------------
	if (empty($this->config['view_path'])) {
          $this->config['view_path'] = App::$modulePath . 'view' . DS;
     }
	$this->template = new Template($this->config);
}

	//php判断手机移动设备访问，返回true是移动设备
	private function is_mobile()
	{
		// 如果有HTTP_X_WAP_PROFILE则一定是移动设备
		if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
		{
		return true;
		}
		// 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
		if (isset ($_SERVER['HTTP_VIA']))
		{
		// 找不到为flase,否则为true
		return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
		}
		// 脑残法，判断手机发送的客户端标志,兼容性有待提高
		if (isset ($_SERVER['HTTP_USER_AGENT']))
		{
		$clientkeywords = array (
		'nokia',
		'oppo',
		'xiaomi',
		'miui',
		'huawei',
		'coolpad',
		'sony',
		'ericsson',
		'mot',
		'samsung',
		'htc',
		'sgh',
		'lg',
		'sharp',
		'sie-',
		'philips',
		'panasonic',
		'alcatel',
		'lenovo',
		'iphone',
		'ipod',
		'blackberry',
		'meizu',
		'android',
		'netfront',
		'symbian',
		'ucweb',
		'windowsce',
		'palm',
		'operamini',
		'operamobi',
		'openwave',
		'nexusone',
		'cldc',
		'midp',
		'wap',
		'mobile'
		);
		// 从HTTP_USER_AGENT中查找手机浏览器的关键字
		if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
		{
		return true;
		}
		}
		// 协议法，因为有可能不准确，放到最后判断
		if (isset ($_SERVER['HTTP_ACCEPT']))
		{
		// 如果只支持wml并且不支持html那一定是移动设备
		// 如果支持wml和html但是wml在html之前则是移动设备
		if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))
		{
		return true;
		}
		}
		return false;
	}


    /**
     * 检测是否存在模板文件
     * @access public
     * @param string $template 模板文件或者模板规则
     * @return bool
     */
    public function exists($template)
    {
        if ('' == pathinfo($template, PATHINFO_EXTENSION)) {
            // 获取模板文件名
            $template = $this->parseTemplate($template);
        }
        return is_file($template);
    }

    /**
     * 渲染模板文件
     * @access public
     * @param string    $template 模板文件
     * @param array     $data 模板变量
     * @param array     $config 模板参数
     * @return void
     */
    public function fetch($template, $data = [], $config = [])
    {
        if ('' == pathinfo($template, PATHINFO_EXTENSION)) {
            // 获取模板文件名
            $template = $this->parseTemplate($template);
        }
        // 模板不存在 抛出异常
        if (!is_file($template)) {
            throw new TemplateNotFoundException('template not exists:' . $template, $template);
        }
        // 记录视图信息
        App::$debug && Log::record('[ VIEW ] ' . $template . ' [ ' . var_export(array_keys($data), true) . ' ]', 'info');
        $this->template->fetch($template, $data, $config);
    }

    /**
     * 渲染模板内容
     * @access public
     * @param string    $template 模板内容
     * @param array     $data 模板变量
     * @param array     $config 模板参数
     * @return void
     */
    public function display($template, $data = [], $config = [])
    {
        $this->template->display($template, $data, $config);
    }

    /**
     * 自动定位模板文件
     * @access private
     * @param string $template 模板文件规则
     * @return string
     */
    private function parseTemplate($template)
    {
        // 获取视图根目录
        if (strpos($template, '@')) {
            // 跨模块调用
            list($module, $template) = explode('@', $template);
            $path                    = APP_PATH . $module . DS . 'view' . DS;
        } else {
            // 当前视图目录
            $path = $this->config['view_path'];
        }

        // 分析模板文件规则
        $request    = Request::instance();
        $controller = Loader::parseName($request->controller());
        if ($controller && 0 !== strpos($template, '/')) {
            $depr     = $this->config['view_depr'];
            $template = str_replace(['/', ':'], $depr, $template);
            if ('' == $template) {
                // 如果模板文件名为空 按照默认规则定位
                $template = str_replace('.', DS, $controller) . $depr . $request->action();
            } elseif (false === strpos($template, $depr)) {
                $template = str_replace('.', DS, $controller) . $depr . $template;
            }
        }
        return $path . ltrim($template, '/') . '.' . ltrim($this->config['view_suffix'], '.');
    }

    /**
     * 配置模板引擎
     * @access private
     * @param string|array  $name 参数名
     * @param mixed         $value 参数值
     * @return void
     */
    public function config($name, $value = null)
    {
        if (is_array($name)) {
            $this->template->config($name);
        } else {
            $this->template->$name = $value;
        }
    }

    public function __call($method, $params)
    {
        return call_user_func_array([$this->template, $method], $params);
    }
}
