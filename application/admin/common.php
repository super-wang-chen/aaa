<?php
	use think\Db;
	function get_nav(){
		$map['type']=0;
		$map['status']=1;
		if(session('user_id')!=config('superadmin')){
			$user_id=session('user_id');
			$auth=new \Auth\Auth;
			$auth_list=$auth->get_userauth($user_id);
			
			$list=Db::name('Category')->where($map)->order('sort desc')->select();
			foreach ($list as $key => $value) {
				if(!empty($value['link'])&&!in_array($value['link'],$auth_list)){
					unset($list[$key]);
				}
			}
		}else{
			$list=Db::name('Category')->where($map)->order('sort desc')->select();
		}
		$list=list_to_tree($list);
		//dump($list);die;
		foreach($list as $k=>$v){//删掉没有二级栏目的
			if(empty($v['_child'])){
				unset($list[$k]);
			}
		}
		//dump($list);die;
		return $list;
	}
	
	function get_category(){
		if($a=cache('get_category')){
			return $a;
		}else{
			$map['type']=1;
			$map['status']=1;
			$result=Db::name('category')->where($map)->order('sort asc,id asc')->select();
			$result=list_to_tree($result);
			cache('get_category',$result);
			return $result;
		}
	}
