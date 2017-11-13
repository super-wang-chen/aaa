<?php
	use think\Db;
	function send_code($phone){
		return 1234;
	}
	function code62($x){
	    $show=''; 
	    while($x>0){ 
	        $s=$x % 62; 
	        if ($s>35){ 
	            $s=chr($s+61); 
	        }elseif($s>9&&$s<=35){ 
	            $s=chr($s+55); 
	        } 
	        $show.=$s; 
	        $x=floor($x/62); 
	        
	    } 
	    return $show;
	} 
	function shorturl($url){ 
	    $url=crc32($url); 
	    $result=sprintf("%u",$url); 
	    return code62($result); 
	} 
	
	function validateURL($URL) {
      $pattern_1 = "/^(http|https|ftp):\/\/(([A-Z0-9][A-Z0-9_-]*)(\.[A-Z0-9][A-Z0-9_-]*)+.(com|org|net|dk|at|us|tv|info|uk|co.uk|biz|se)$)(:(\d+))?\/?/i";
      $pattern_2 = "/^(www)((\.[A-Z0-9][A-Z0-9_-]*)+.(com|org|net|dk|at|us|tv|info|uk|co.uk|biz|se)$)(:(\d+))?\/?/i";       
      if(preg_match($pattern_1, $URL) || preg_match($pattern_2, $URL)){
        return true;
      } else{
        return false;
      }
    }

	//获取所有前台分类
	function get_cate(){
		if($a=cache('get_cate')){
			return $a;
		}else{
			$map['type']=1;
			$map['status']=1;
			$result=Db::name('category')->where($map)->order('sort asc,id asc')->select();
			cache('get_cate',$result);
			return $result;
		}
	}

	//获取导航栏(即前台分类中属于导航的分类)
	function get_nav(){
		$cate=get_cate();
		$arr=array();
		foreach($cate as $v){
			if($v['show_nav']==1){
				$arr[]=$v;
			}
		}
		return list_to_tree($arr);
	}	

	//获取二级导航栏
	function get_second_nav($id){
		$cate = get_cate();
		$sec_nav = array();
		foreach($cate as $v){
			if($v['pid']==$id){
				$sec_nav[]=$v;
			}
		}
		return $sec_nav;
	}	

	//获取标题
	function get_title($id){
		//查询所有分类
		$cate=get_cate();
		$arr=array();
		foreach($cate as $v){
			//获取分类标题
			if($v['id']==$id){
				return $v['title'];
			}
		}
		return null;
	}	

    //获取二级栏目
	function get_er($id){
		if($a=cache('get_er'.$id)){
			return $a;
		}else{
			$map['pid']=$id;
			$map['status']=1;
			$result=Db::name('category')->where($map)->order('id asc')->select();
			cache('get_er'.$id,$result);
			return $result;
		}
	}	

	//获取单条数据
	function get_one($table,$id){
		$map['id']=$id;
		$map['status']=1;
		$result=Db::name($table)->where($map)->find();
		return $result;
	}	
		
	//获取列表所有数据
	function get_all($table,$where){
		$result=Db::name($table)
				->where($where)
				->order('add_time desc')
				->select();
		return $result;
	}
	
	/*
	 *获取列表页
	 *$id 		int 	当前分类的id	
	 *$table 	string 	数据表名称	
	 *return    $data 	返回值(查询出来的数据)
	*/
    function get_p($id,$table,$num){
		$where['pid'] = $id;
		$where['status'] = 1;
		$info = Db::name($table)
				->where($where)
				->order('id desc ,is_top desc')
				->paginate($num,false,['type'=>'Bootstrap1']);
		//获取列表数据
		$data['list'] = $info;
		//print_r($info);
		//分页
		$data['page'] = $info->render();
		//print_r($data['page']);
		return $data;		
    }	

	//获取文章列表（可选条数）
	function get_news($pid,$num){
		if($a=cache('get_news'.$pid.$num)){
			return $a;
		}else{
			$map['pid']=$pid;
			$map['status']=1;
			$map['is_top']=1;
			$result=Db::name('article')
			->where($map)
			->limit($num)
			->order('add_time desc ,is_top desc')
			->select();
			cache('get_news'.$pid.$num,$result);
			return $result;
		}
	}	

	//获取列表（可选条数）
	function get_list($pid,$table,$num){
		if($a=cache('get_list'.$pid.$table.$num)){
			return $a;
		}else{
			$map['pid'] = $pid;
			$map['status'] = 1;
			$result=Db::name($table)
			->where($map)
			->limit($num)
			->order('id desc ,is_top desc')
			->select();
			cache('get_news'.$pid.$table.$num,$result);
			return $result;
		}
	}		

	//获取图片
	function get_banner($pid){
		if($a=cache('get_banner'.$pid)){
			return $a;
		}else{
			$map['pid']=$pid;
			$map['status']=1;
			$result=Db::name('pic')->where($map)->order('id asc')->select();
			cache('get_banner'.$pid,$result);
			return $result;
		}
	}
    //获取产品图片
    function get_product($pid){
    	if($a=cache('get_product'.$pid)){
			return $a;
		}else{
			$map['pid']=$pid;
			$map['status']=1;
			$result=Db::name('pic')->where($map)->order('id asc')->select();
			cache('get_product'.$pid,$result);
			return $result;
		}
    }
	//获取标题的英文
	function get_eng($id){
		//查询所有分类
		$cate=get_cate();
		$arr=array();
		foreach($cate as $v){
			//获取分类标题
			if($v['id']==$id){
				return $v['english'];
			}
		}
		return null;
	}	

	//获取链接
    function get_link($pid){
        if($a=cache('get_link'.$pid)){
            return $a;
        }else{
            $map['pid']=$pid;
            $map['status']=1;
            $result=Db::name('link')
                ->where($map)
                ->order('id asc')
                ->select();
            cache('get_link'.$pid,$result);
            return $result;
        }
    }

	/*
	 *搜索
	 *$title 	string 	用户输入的关键字	
	 *$table 	string 	数据表名称	
	 *return    $data 	返回值(查询出来的数据)
	*/
    function get_seo($table,$title){
		//根据关键字条件进行查询
		$map['status'] = 1;
		$map['title'] = ['like','%'.$title.'%'];
		$data['count']= Db::name($table)->where($map)->count();
		$data['list'] = Db::name($table)
						->where($map)
						->order('id desc')
						->field('id,title,pid')
						->select();
		return $data;       
    }    

	/* 
	 * 获取详情页
	 * $id 		int 	该详情页的父级id	
	 * $cid 	int 	该详情页的id	
	 * $table 	string 	数据表名称	
	 * return   $info 	返回值(查询出来的数据，包括当前详情页以及上一条下一条)
	*/
    function get_con($id,$cid,$table){
		//获取当前详情页信息
		$info['info'] = get_one($table,$cid);
		//上一条
		$info['pre'] = Db::name($table)
		->where(['pid'=>$info['info']['pid'],'status'=>1,'id'=>['lt',$cid]])
		->field('id,pid,title')
		->order('id desc')
		->find();
		//下一条
		$info['next'] = Db::name($table)
		->where(['pid'=>$info['info']['pid'],'status'=>1,'id'=>['gt',$cid]])
		->field('id,pid,title')
		->find();
		return $info;
    }



	//百度编辑器实现内容分页
	function pageBreak($content){ 
	    $content  = $content;
		$strSplit = preg_split('/_ueditor_page_break_tag_/', $content);
		//var_dump($strSplit);exit;
	    $count    = count($strSplit); 
	    $outStr   = ""; 
	    $i        = 1;  
	    if ($count > 1 ) { 
	        $outStr   = "<div id='page_break'>"; 
	        foreach($strSplit as $value) { 
	            if ($i <= 1) { 
	                $outStr .= "<div id='page_$i'>$value</div>"; 
	            } else { 
	                $outStr .= "<div id='page_$i' class='collapse'>$value</div>"; 
	            } 
	            $i++; 
	        } 
	 
	        $outStr .= "<div class='num'>"; 
	        for ($i = 1; $i <= $count; $i++) { 
	            $outStr .= "<li>$i</li>"; 
	        } 
	        $outStr .= "</div></div>"; 
	        return $outStr; 
	    } else { 
	        return $content; 
	    } 
	} 	
		
	//获取父级id
	function get_idpid($id){
		$cate=get_cate();
		foreach($cate as $v){
			if($v['pid']==$id){
				return intval($v['id']);
			}
		}
		return null;
	}

	
	//获取位置导航
	function nav_post($cid){
		$pid_info = DB::name('article')->where(['id'=>$cid])->field('pid')->find();
		if($pid_info){
			$pid = $pid_info['pid'];
		}else{
			$pid = $cid;
		}
		while($pid!=0){
			$info = Db::name('category')
			->where(['id'=>$pid])
			->field('id,title,pid,link')->find();
			$pid = $info['pid'];
			//去掉附属栏目
			if($info['id']!==193){
				$arr[] = $info;
			}
		}
		krsort($arr);
		return $arr;
	}
	
    //判断是否是手机端
    function is_phone_request(){
        vendor('Mobile_Detect.Mobile_Detect');
        $detect = new Mobile_Detect;
        if($detect->isMobile()){
            return true;
        }else{
            return false;
        }
    }
	
	//获取子代id
	function get_idchild($id){
		$cate=get_cate();
		$arr=array();
		foreach($cate as $v){
			if($v['pid']==$id){
				$arr[]=$v;
			}
		}
		return $arr;
	}
	
	
	function get_page($id){
		$cate=get_cate();
		foreach($cate as $v){
			if($v['id']==$id){
				if(!empty($v['keywords'])){
					$v[strtoupper('keywords')]=$v['keywords'];
				}
				if(!empty($v['description'])){
					$v[strtoupper('description')]=$v['description'];
				}
				return $v;
			}
		}
		return null;
	}

    //回车换行函数
    function newline($str){
        $arr=explode("\n",$str);
        $str1=nl2br($str);//回车换成换行默认函数
        echo $str1;
    }



	
	function  implode_z($list,$key){
		foreach($list as $v){
			$map1[]=$v[$key];
		}
         $map1=implode(',',$map1);
         return $map1;
	}

	/**
		* 验证手机号是否正确
		* @param INT $mobile
		*/
		 function isMobile($mobile) {
		    if (!is_numeric($mobile)) {
		        return false;
		    }
		    return preg_match('#^13[\d]{9}$|^14[5,7]{1}\d{8}$|^15[^4]{1}\d{8}$|^17[0,6,7,8]{1}\d{8}$|^18[\d]{9}$#', $mobile) ? true : false;
		 }

		/**
		 * 请求接口返回内容
		 * @param  string $url [请求的URL地址]
		 * @param  string $params [请求的参数]
		 * @param  int $ipost [是否采用POST形式]
		 * @return  string
		 */
		function juhecurl($url,$params=false,$ispost=0){
		    $httpInfo = array();
		    $ch = curl_init();
		    curl_setopt( $ch, CURLOPT_HTTP_VERSION , CURL_HTTP_VERSION_1_1 );
		    curl_setopt( $ch, CURLOPT_USERAGENT , 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.22 (KHTML, like Gecko) Chrome/25.0.1364.172 Safari/537.22' );
		    curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT , 30 );
		    curl_setopt( $ch, CURLOPT_TIMEOUT , 30);
		    curl_setopt( $ch, CURLOPT_RETURNTRANSFER , true );
		    if( $ispost )
		    {
		        curl_setopt( $ch , CURLOPT_POST , true );
		        curl_setopt( $ch , CURLOPT_POSTFIELDS , $params );
		        curl_setopt( $ch , CURLOPT_URL , $url );
		    }
		    else
		    {
		        if($params){
		            curl_setopt( $ch , CURLOPT_URL , $url.'?'.$params );
		        }else{
		            curl_setopt( $ch , CURLOPT_URL , $url);
		        }
		    }
		    $response = curl_exec( $ch );
		   
		    $httpCode = curl_getinfo( $ch , CURLINFO_HTTP_CODE );
		    $httpInfo = array_merge( $httpInfo , curl_getinfo( $ch ) );
		    curl_close( $ch );
		    return $response;
		}

?>