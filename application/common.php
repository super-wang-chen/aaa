<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------
//use think\Db;
//use think\Cache;
// 应用公共文件

/**
 * 返回路径中的参数
 * @param $add array 需要添加的参数
 * @param $del string 需要过滤掉的参数，使用逗号分隔
 * @return 参数数组
 * @example
 *        说明：给url添加排序条件sort，同时删除掉url中的category和author参数及它们的值
 *        I("index",param(array('sort'=>'id'),'category,author'))
 */
function param($add = array(), $del = '') {
	$arr = array_merge(input(), $add);
	$delArr = explode(',', $del);
	foreach ($delArr as $val) {
		unset($arr[$val]);
	}
	return $arr;
}

/*
 百度编辑器加载
 * */
function ueditor($name='content',$content='',$width='100%',$height='350px'){
	$content=str_replace("\'","\"",$content);
	$rand=rand(100,999);
	echo '<script id="'.$name.'" name="'.$name.'" style="width:'.$width.';height:'.$height.';" type="text/plain">'.$content.'</script>';
	echo '<script type="text/javascript">UE.delEditor("'.$name.'");var ue_'.$name.' = UE.getEditor("'.$name.'",{zIndex:2});</script>';
}

/*
 单个图片上传加载
<script src="__JS__/jquery.Huploadify.js"></script>
 * */
function pic($js_name='file',$name='pic',$pic=''){
}

//汉字转为拼音
function Pinyin($_String, $_Code='UTF8'){ //GBK页面可改为gb2312，其他随意填写为UTF8
        $_DataKey = "a|ai|an|ang|ao|ba|bai|ban|bang|bao|bei|ben|beng|bi|bian|biao|bie|bin|bing|bo|bu|ca|cai|can|cang|cao|ce|ceng|cha". 
                        "|chai|chan|chang|chao|che|chen|cheng|chi|chong|chou|chu|chuai|chuan|chuang|chui|chun|chuo|ci|cong|cou|cu|". 
                        "cuan|cui|cun|cuo|da|dai|dan|dang|dao|de|deng|di|dian|diao|die|ding|diu|dong|dou|du|duan|dui|dun|duo|e|en|er". 
                        "|fa|fan|fang|fei|fen|feng|fo|fou|fu|ga|gai|gan|gang|gao|ge|gei|gen|geng|gong|gou|gu|gua|guai|guan|guang|gui". 
                        "|gun|guo|ha|hai|han|hang|hao|he|hei|hen|heng|hong|hou|hu|hua|huai|huan|huang|hui|hun|huo|ji|jia|jian|jiang". 
                        "|jiao|jie|jin|jing|jiong|jiu|ju|juan|jue|jun|ka|kai|kan|kang|kao|ke|ken|keng|kong|kou|ku|kua|kuai|kuan|kuang". 
                        "|kui|kun|kuo|la|lai|lan|lang|lao|le|lei|leng|li|lia|lian|liang|liao|lie|lin|ling|liu|long|lou|lu|lv|luan|lue". 
                        "|lun|luo|ma|mai|man|mang|mao|me|mei|men|meng|mi|mian|miao|mie|min|ming|miu|mo|mou|mu|na|nai|nan|nang|nao|ne". 
                        "|nei|nen|neng|ni|nian|niang|niao|nie|nin|ning|niu|nong|nu|nv|nuan|nue|nuo|o|ou|pa|pai|pan|pang|pao|pei|pen". 
                        "|peng|pi|pian|piao|pie|pin|ping|po|pu|qi|qia|qian|qiang|qiao|qie|qin|qing|qiong|qiu|qu|quan|que|qun|ran|rang". 
                        "|rao|re|ren|reng|ri|rong|rou|ru|ruan|rui|run|ruo|sa|sai|san|sang|sao|se|sen|seng|sha|shai|shan|shang|shao|". 
                        "she|shen|sheng|shi|shou|shu|shua|shuai|shuan|shuang|shui|shun|shuo|si|song|sou|su|suan|sui|sun|suo|ta|tai|". 
                        "tan|tang|tao|te|teng|ti|tian|tiao|tie|ting|tong|tou|tu|tuan|tui|tun|tuo|wa|wai|wan|wang|wei|wen|weng|wo|wu". 
                        "|xi|xia|xian|xiang|xiao|xie|xin|xing|xiong|xiu|xu|xuan|xue|xun|ya|yan|yang|yao|ye|yi|yin|ying|yo|yong|you". 
                        "|yu|yuan|yue|yun|za|zai|zan|zang|zao|ze|zei|zen|zeng|zha|zhai|zhan|zhang|zhao|zhe|zhen|zheng|zhi|zhong|". 
                        "zhou|zhu|zhua|zhuai|zhuan|zhuang|zhui|zhun|zhuo|zi|zong|zou|zu|zuan|zui|zun|zuo"; 
        $_DataValue = "-20319|-20317|-20304|-20295|-20292|-20283|-20265|-20257|-20242|-20230|-20051|-20036|-20032|-20026|-20002|-19990". 
                        "|-19986|-19982|-19976|-19805|-19784|-19775|-19774|-19763|-19756|-19751|-19746|-19741|-19739|-19728|-19725". 
                        "|-19715|-19540|-19531|-19525|-19515|-19500|-19484|-19479|-19467|-19289|-19288|-19281|-19275|-19270|-19263". 
                        "|-19261|-19249|-19243|-19242|-19238|-19235|-19227|-19224|-19218|-19212|-19038|-19023|-19018|-19006|-19003". 
                        "|-18996|-18977|-18961|-18952|-18783|-18774|-18773|-18763|-18756|-18741|-18735|-18731|-18722|-18710|-18697". 
                        "|-18696|-18526|-18518|-18501|-18490|-18478|-18463|-18448|-18447|-18446|-18239|-18237|-18231|-18220|-18211". 
                        "|-18201|-18184|-18183|-18181|-18012|-17997|-17988|-17970|-17964|-17961|-17950|-17947|-17931|-17928|-17922". 
                        "|-17759|-17752|-17733|-17730|-17721|-17703|-17701|-17697|-17692|-17683|-17676|-17496|-17487|-17482|-17468". 
                        "|-17454|-17433|-17427|-17417|-17202|-17185|-16983|-16970|-16942|-16915|-16733|-16708|-16706|-16689|-16664". 
                        "|-16657|-16647|-16474|-16470|-16465|-16459|-16452|-16448|-16433|-16429|-16427|-16423|-16419|-16412|-16407". 
                        "|-16403|-16401|-16393|-16220|-16216|-16212|-16205|-16202|-16187|-16180|-16171|-16169|-16158|-16155|-15959". 
                        "|-15958|-15944|-15933|-15920|-15915|-15903|-15889|-15878|-15707|-15701|-15681|-15667|-15661|-15659|-15652". 
                        "|-15640|-15631|-15625|-15454|-15448|-15436|-15435|-15419|-15416|-15408|-15394|-15385|-15377|-15375|-15369". 
                        "|-15363|-15362|-15183|-15180|-15165|-15158|-15153|-15150|-15149|-15144|-15143|-15141|-15140|-15139|-15128". 
                        "|-15121|-15119|-15117|-15110|-15109|-14941|-14937|-14933|-14930|-14929|-14928|-14926|-14922|-14921|-14914". 
                        "|-14908|-14902|-14894|-14889|-14882|-14873|-14871|-14857|-14678|-14674|-14670|-14668|-14663|-14654|-14645". 
                        "|-14630|-14594|-14429|-14407|-14399|-14384|-14379|-14368|-14355|-14353|-14345|-14170|-14159|-14151|-14149". 
                        "|-14145|-14140|-14137|-14135|-14125|-14123|-14122|-14112|-14109|-14099|-14097|-14094|-14092|-14090|-14087". 
                        "|-14083|-13917|-13914|-13910|-13907|-13906|-13905|-13896|-13894|-13878|-13870|-13859|-13847|-13831|-13658". 
                        "|-13611|-13601|-13406|-13404|-13400|-13398|-13395|-13391|-13387|-13383|-13367|-13359|-13356|-13343|-13340". 
                        "|-13329|-13326|-13318|-13147|-13138|-13120|-13107|-13096|-13095|-13091|-13076|-13068|-13063|-13060|-12888". 
                        "|-12875|-12871|-12860|-12858|-12852|-12849|-12838|-12831|-12829|-12812|-12802|-12607|-12597|-12594|-12585". 
                        "|-12556|-12359|-12346|-12320|-12300|-12120|-12099|-12089|-12074|-12067|-12058|-12039|-11867|-11861|-11847". 
                        "|-11831|-11798|-11781|-11604|-11589|-11536|-11358|-11340|-11339|-11324|-11303|-11097|-11077|-11067|-11055". 
                        "|-11052|-11045|-11041|-11038|-11024|-11020|-11019|-11018|-11014|-10838|-10832|-10815|-10800|-10790|-10780". "|-10764|-10587|-10544|-10533|-10519|-10331|-10329|-10328|-10322|-10315|-10309|-10307|-10296|-10281|-10274". 
                        "|-10270|-10262|-10260|-10256|-10254"; 
        $_TDataKey   = explode('|', $_DataKey); 
        $_TDataValue = explode('|', $_DataValue);
        $_Data = array_combine($_TDataKey, $_TDataValue);
        arsort($_Data); 
        reset($_Data);
        if($_Code!= 'gb2312') $_String = _U2_Utf8_Gb($_String); 
        $_Res = ''; 
        for($i=0; $i<strlen($_String); $i++) { 
                $_P = ord(substr($_String, $i, 1)); 
                if($_P>160) { 
                        $_Q = ord(substr($_String, ++$i, 1)); $_P = $_P*256 + $_Q - 65536;
                } 
                $_Res .= _Pinyin($_P, $_Data); 
        } 
        return preg_replace("/[^a-z0-9]*/", '', $_Res); 
} 
function _Pinyin($_Num, $_Data){
        if($_Num>0 && $_Num<160 ){
                return chr($_Num);
        }elseif($_Num<-20319 || $_Num>-10247){
                return '';
        }else{
                foreach($_Data as $k=>$v){ if($v<=$_Num) break; } 
                return $k; 
        } 
}
function _U2_Utf8_Gb($_C){
        $_String = ''; 
        if($_C < 0x80){
                $_String .= $_C;
        }elseif($_C < 0x800) {
                $_String .= chr(0xC0 | $_C>>6); 
                $_String .= chr(0x80 | $_C & 0x3F); 
        }elseif($_C < 0x10000){
                $_String .= chr(0xE0 | $_C>>12); 
                $_String .= chr(0x80 | $_C>>6 & 0x3F); 
                $_String .= chr(0x80 | $_C & 0x3F); 
        }elseif($_C < 0x200000){
                $_String .= chr(0xF0 | $_C>>18); 
                $_String .= chr(0x80 | $_C>>12 & 0x3F); 
                $_String .= chr(0x80 | $_C>>6 & 0x3F); 
                $_String .= chr(0x80 | $_C & 0x3F); 
        } 
        return iconv('UTF-8', 'GB2312', $_String); 
}

function msubstr($string, $length = 0, $ellipsis = '…', $start = 0) {
	$string = strip_tags($string);
	$string = preg_replace('/\n/is', '', $string);
	//$string=preg_replace('/ |　/is','',$string);//清除字符串中的空格
	$string = preg_replace('/&nbsp;/is', '', $string);
	preg_match_all("/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/", $string, $string);
	if (is_array($string) && !empty($string[0])) {
		$string = implode('', $string[0]);
		if (strlen($string) < $start + 1) {
			return '';
		}
		preg_match_all("/./su", $string, $ar);
		$string2 = '';
		$tstr = '';
		for ($i = 0; isset($ar[0][$i]); $i++) {
			if (strlen($tstr) < $start) {
				$tstr .= $ar[0][$i];
			} else {
				if (strlen($string2) < $length + strlen($ar[0][$i])) {
					$string2 .= $ar[0][$i];
				} else {
					break;
				}
			}
		}
		return $string == $string2 ? $string2 : $string2 . $ellipsis;
	} else {
		$string = '';
	}
	return $string;
}
/**
 * select返回的数组进行整数映射转换
 *
 * @param array $map  映射关系二维数组  array(
 *                                          '字段名1'=>array(映射关系数组),
 *                                          '字段名2'=>array(映射关系数组),
 *                                           ......
 *                                       )
 * @author wuhao
 * @return array
 *
 *  array(
 *      array('id'=>1,'title'=>'标题','status'=>'1','status_text'=>'正常')
 *      ....
 *  )
 *
 */
function int_to_string($data, $map = array('gender'=>array(1=>'男',0=>'女'),'status'=>array(1=>'正常',-1=>'删除',0=>'禁用',2=>'未审核',3=>'草稿'))) {
	if ($data === false || $data === null) {
		return $data;
	}
	$data = (array)$data;
	foreach ($data as $key => $row) {
		foreach ($map as $col => $pair) {
			if (isset($row[$col]) && isset($pair[$row[$col]])) {
				$data[$key][$col . '_text'] = $pair[$row[$col]];
			}
		}
	}
	return $data;
}

/**
 * 将返回的数据集转换成树
 * @param  array   $list  数据集
 * @param  string  $pk    主键
 * @param  string  $pid   父节点名称
 * @param  string  $child 子节点名称
 * @param  integer $root  根节点ID
 * @return array          转换后的树
 */
function list_to_tree($list, $pk = 'id', $pid = 'pid', $child = '_child', $root = 0) {
	$tree = array();
	// 创建Tree
	if (is_array($list)) {
		// 创建基于主键的数组引用
		$refer = array();
		foreach ($list as $key => $data) {
			//将数据的id转换为它的键
			$refer[$data[$pk]] = &$list[$key];
		}
		foreach ($list as $key => $data) {
			// 判断是否存在parent
			$parentId = $data[$pid];
			//查询顶级分类
			if ($root == $parentId) {
				$tree[$data[$pk]] = &$list[$key];
			} else {
				if (isset($refer[$parentId])) {
					$parent = &$refer[$parentId];
					$parent[$child][] = &$list[$key];
					//dump($list[$key]);die;
				}
			}
		}
	}
	return $tree;
}



//根据字段的值进行数组过滤
function assoc_unique($arr, $key) {
	$tmp_arr = array();
	foreach ($arr as $k => $v) {
		if (in_array($v[$key], $tmp_arr)) {//搜索$v[$key]是否在$tmp_arr数组中存在，若存在返回true
			unset($arr[$k]);
		} else {
			$tmp_arr[] = $v[$key];
		}
	}
	return $arr;
}

/*
 * 将ip转换为数字
 * */
function ipton($ip) {
	$ip_arr = explode('.', $ip);
	//分隔ip段
	$ipstr='';
	foreach ($ip_arr as $value) {
		$iphex = dechex($value);
		//将每段ip转换成16进制
		if (strlen($iphex) < 2)//255的16进制表示是ff，所以每段ip的16进制长度不会超过2
		{
			$iphex = '0' . $iphex;
			//如果转换后的16进制数长度小于2，在其前面加一个0
			//没有长度为2，且第一位是0的16进制表示，这是为了在将数字转换成ip时，好处理
		}
		$ipstr .= $iphex;
		//将四段IP的16进制数连接起来，得到一个16进制字符串，长度为8
	}
	return hexdec($ipstr);
	//将16进制字符串转换成10进制，得到ip的数字表示
}

//将数字转换为IP，进行上面函数的逆向过程
function ntoip($n) {
	$iphex = dechex($n);
	//将10进制数字转换成16进制
	$len = strlen($iphex);
	//得到16进制字符串的长度
	if (strlen($iphex) < 8) {
		$iphex = '0' . $iphex;
		//如果长度小于8，在最前面加0
		$len = strlen($iphex);
		//重新得到16进制字符串的长度
	}
	//这是因为ipton函数得到的16进制字符串，如果第一位为0，在转换成数字后，是不会显示的
	//所以，如果长度小于8，肯定要把第一位的0加上去
	//为什么一定是第一位的0呢，因为在ipton函数中，后面各段加的'0'都在中间，转换成数字后，不会消失
	for ($i = 0, $j = 0; $j < $len; $i = $i + 1, $j = $j + 2) {//循环截取16进制字符串，每次截取2个长度
		$ippart = substr($iphex, $j, 2);
		//得到每段IP所对应的16进制数
		$fipart = substr($ippart, 0, 1);
		//截取16进制数的第一位
		if ($fipart == '0') {//如果第一位为0，说明原数只有1位
			$ippart = substr($ippart, 1, 1);
			//将0截取掉
		}
		$ip[] = hexdec($ippart);
		//将每段16进制数转换成对应的10进制数，即IP各段的值
	}

	//$ip = array_reverse($ip);

	return implode('.', $ip);
	//连接各段，返回原IP值
}


/**
 * 通过CURL发送HTTP请求
 * @param string $url  //请求URL
 * @param array $postFields //请求参数
 * @return mixed
 */
function curlPost($url, $postFields) {
	$postFields = http_build_query($postFields);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}
function curl($curl){
   	$ceshi = file_get_contents($curl);
 	return $ceshi;
}
