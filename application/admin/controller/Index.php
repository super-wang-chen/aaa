<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Cache;
use think\Validate;
class Index extends Controller
{
	public function _initialize()
    {
        if(!session("?user_id")){
        	$this->redirect(url('/admin/Login/index'));
        }
		if(session('pwerr')>=3){
			session(null);
			$this->success('非法次数过多,强制退出！',url('/admin/Login/index'));
		}
        $this->request = request();
		$check_name=$this->request->action();
		if(session('user_id')!=config('superadmin')){
			$auth=new \Auth\Auth;
			if($auth->check($check_name,session('user_id'))){// 第一个参数是规则名称,第二个参数是用户UID
			   
			}else{
			    $this->error('没有授权！(Authorization Faile)');
			} 
		}
		$action=$this->request->action();
		$now_url=$this->request->url(true);
		$this->assign('action',$action);
		$this->assign('now_url',$now_url);
		if($this->request->isPost()){ //添加修改的时候清空缓存
			Cache::clear();
		}
    }
	public function index(){
		$data['left_list']=get_nav();
		$this->assign($data);
		return view();
	}
	
	public function main(){		
		return view();
	}

	//栏目列表
	public function cate_list(){
		$map['type']=1;
		$map['status']=array('neq',-1);
		$list=Db::name('category')->where($map)->order('sort asc,id asc')->paginate(100);
		$data['page']=$list->render();
		$list=list_to_tree($list->get_items());
		$data['list']=$list;
		$this->assign($data);
		return view();
	}

	//添加栏目
	public function add_cate(){
		$id=intval(input('id'));
		if($this->request->isPost()){
			$post=input('post.');
			input('status')=='on'?$post['status']=1:$post['status']=0;
			input('show_nav')=='on'?$post['show_nav']=1:$post['show_nav']=0;
			$rule = [
			    'title|标题'  => 'require',
			    'link|类型'=>'require',
			];
			$validate = new Validate($rule);
			$result   = $validate->check($post);
			if(!$result){
				$this->error($validate->getError());
			}
			$post['add_time']=time();
			if($id){
				$status=update('category',$post);
			}else{
				$status=add('category',$post);
			}
			if(is_numeric($status)){
				$this->success('操作成功！');
			}else{
				$this->error('操作失败！');
			}
		}else{
			if($id){
				$info=Db::name('category')->where('id',$id)->find();
			}else{
				$info=1;
			}
			$cate_map['type']=1;
			$cate_map['status']=1;
			$cate_list=Db::name('category')->where($cate_map)->field('id,pid,title,lock')->select();
			$cate_list=list_to_tree($cate_list);
			$this->assign('cate_list',$cate_list);
			$this->assign('type_list',config('type_func'));
			$this->assign('info',$info);
			return view();
		}
	}

	//链接列表
	public function link_list(){
		$pid=input('pid');
		if($pid){
			$map['link.pid']=$pid;
			$this->assign('pid',$pid);
		}
		$map['link.status']=array('neq',-1);
		$list=Db::view('link','*')->view('category',['title'=>'cate_name'],'category.id=link.pid')->where($map)->paginate();
		$data['page']=$list->render();
		$data['list']=$list;
		unset($map['link.pid']);
		$cate_list=Db::view('link','pid')->view('category',['title'=>'cate_name'],'category.id=link.pid')->where($map)->distinct(true)->select();
		$this->assign('cate_list',$cate_list);
		$this->assign($data);
		return view();
	}
	
	//添加链接
	public function add_link(){
		$id=intval(input('id'));
		if($this->request->isPost()){
			$post=input('post.');
			input('status')=='on'?$post['status']=1:$post['status']=0;
			$post['exp_time']!=''?$post['exp_time']=strtotime($post['exp_time']):$post['exp_time']=time();
			$rule = [
			    'title|标题'  => 'require',
			    'pid|分类'=>'require',
			];
			$validate = new Validate($rule);
			$result   = $validate->check($post);
			if(!$result){
				$this->error($validate->getError());
			}
			if($id){
				$status=update('link',$post);
			}else{
				$status=add('link',$post);
			}
			if(is_numeric($status)){
				$this->success('操作成功！');
			}else{
				$this->error('操作失败！');
			}
		}else{
			if($id){
				$info=Db::name('link')->where('id',$id)->find();
			}else{
				$info=1;
			}
			$cate_list=get_category();
			$this->assign('cate_list',$cate_list);
			$this->assign('info',$info);
			return view();
		}
	}	
	
	//文章列表
	public function article_list(){
		$pid=input('pid');
		if($pid){
			$map['article.pid']=$pid;
			$this->assign('pid',$pid);
		}
		$map['article.status']=array('neq',-1);
		$list=Db::view('article','*')->view('category',['title'=>'cate_name'],'category.id=article.pid')->where($map)->order('article.is_top desc,article.id asc')->paginate();
		$data['page']=$list->render();
		$data['list']=$list;
		unset($map['article.pid']);
		$cate_list=Db::view('article','pid')->view('category',['title'=>'cate_name'],'category.id=article.pid')->where($map)->distinct(true)->select();
		$this->assign('cate_list',$cate_list);
		$this->assign($data);
		return view();
	}
	
	//添加文章
	public function add_article(){
		$id=intval(input('id'));
		if($this->request->isPost()){
			$post=input('post.');
			input('status')=='on'?$post['status']=1:$post['status']=0;
			$rule = [
			    'title|标题'  => 'require',
			    'pid|文章分类'=>'require',
			];
			$validate = new Validate($rule);
			$result   = $validate->check($post);
			if(!$result){
				$this->error($validate->getError());
			}
			if(empty($post['add_time'])){
				$post['add_time']=time();
			}else{
				$post['add_time']=strtotime($post['add_time']);
			}
			
			if($id){
				$status=update('article',$post);
			}else{
				$status=add('article',$post);
			}
			
			if(is_numeric($status)){
				$this->success('操作成功！');
			}else{
				$this->error('操作失败！');
			}
		}else{
			if($id){
				$info=Db::name('article')->where('id',$id)->find();
			}else{
				$info=1;
			}			
			$cate_list=get_category();
			$this->assign('cate_list',$cate_list);
			$this->assign('info',$info);
			return view();
		}
	}
		
	//图片列表
	public function pic_list(){
		$pid=input('pid');
		if($pid){
			$map['pic.pid']=$pid;
			$this->assign('pid',$pid);
		}
		$map['pic.status']=array('neq',-1);
		$list=Db::view('pic','*')->view('category',['title'=>'cate_name'],'category.id=pic.pid')->where($map)->order('pic.is_top desc,pic.id asc')->paginate();
		$data['page']=$list->render();
		$data['list']=$list;
		unset($map['pic.pid']);
		$cate_list=Db::view('pic','pid')->view('category',['title'=>'cate_name'],'category.id=pic.pid')->where($map)->distinct(true)->select();
		$this->assign('cate_list',$cate_list);
		$this->assign($data);
		return view();
	}
	
	//添加图片
	public function add_pic(){
		$id=intval(input('id'));
		if($this->request->isPost()){
			$post=input('post.');
			input('status')=='on'?$post['status']=1:$post['status']=0;
			$rule = [
			    'title|标题'  => 'require',
			    'pid|图片分类'=>'require',
			];
			$post['add_time']=time();
			$validate = new Validate($rule);
			$result   = $validate->check($post);
			if(!$result){
				$this->error($validate->getError());
			}
			if($id){
				$status=update('pic',$post);
			}else{
				$status=add('pic',$post);
			}
			
			if(is_numeric($status)){
				$this->success('操作成功！');
			}else{
				$this->error('操作失败！');
			}
		}else{
			if($id){
				$info=Db::name('pic')->where('id',$id)->find();
			}else{
				$info=1;
			}
			
			$cate_list=get_category();
			
			$this->assign('cate_list',$cate_list);
			$this->assign('info',$info);
			return view();
		}
	}
	

	//留言列表
	public function lyb_list(){
		$map['status']=array('neq',-1);
		$list=Db::name('lyb')->where($map)->order('id asc')->paginate();
		$data['page']=$list->render();
		$data['list']=$list;
		$this->assign($data);
		return view();
	}	
   
	//产品列表
	public function goods_list(){
		$pid=input('pid');
		if($pid){
			$map['goods.pid']=$pid;
			$this->assign('pid',$pid);
		}
		$map['goods.status']=array('neq',-1);
		$list=Db::view('goods','*')->view('category',['title'=>'cate_name'],'category.id=goods.pid')->where($map)->order('goods.id desc')->paginate();
		$data['page']=$list->render();
		$data['list']=$list;
		unset($map['goods.pid']);
		$cate_list=Db::view('goods','pid')->view('category',['title'=>'cate_name'],'category.id=goods.pid')->where($map)->distinct(true)->select();
		$this->assign('cate_list',$cate_list);
		$this->assign($data);
		return view();
	}

	//添加产品
	public function add_goods(){
		 $db=Db::name('link'); 
		 $result = $db->field("link")->order('id desc')->find(); 
		 $url = $result['link'] ;                                              
		 $curl = curl($url);
		//print_r($curl);die;
        $json = json_decode($curl);
        //$aa = new \stdClass
        foreach ($json as $k=>$v){
        	 $json_k[] = $k;
        	foreach ($v as $k1=>$v1){
     	     $json_er_array[] =  $v1; 	    
         }      
        }    
        //print_r($json_k);die;
        for($i=0; $i<count($json_er_array);$i++){       	 
        	if($i%2==0)
        	 $data['number'][]  = $json_er_array[$i];
        	 else if($i%2!=0)
        	 $data['time'][]= $json_er_array[$i];                       
		    }		
		     $data['key'] = $json_k;
		     
		    //print_r($data); 
		    //$info = add('goods',$data);
		    //print_r($info);
		$id=intval(input('id'));
		if($this->request->isPost()){
			$post=input('post.');
			$post['add_time']=time();		
			input('status')=='on'?$post['status']=1:$post['status']=0;
			$rule = [
			    'title|标题'  => 'require',
			    'pid|分类'=>'require',
			];
			$validate = new Validate($rule);
			$result   = $validate->check($post);
			if(!$result){
				$this->error($validate->getError());
			}
			
			if($id){				
				$status=update('goods',$post);
			}else{				
				$status=add('goods',$post);							
			}
			
			if(is_numeric($status)){
				$this->success('操作成功！');
			}else{
				$this->error('操作失败！');
			}
		}else{
			if($id){
				$info=Db::name('goods')->where('id',$id)->find();
			}else{
				$info=1;
			}
			//print_r($result);die;
			$cate_list=get_category();
			//$goods_cate =Db::name('goods_cate')->select();
			//$this->assign('goods_cate',$goods_cate);
			$this->assign("data",$data);
			$this->assign('cate_list',$cate_list);
			$this->assign('info',$info);
			return view();
		}
	}   
   
   
   	
	//改变状态值
	public function change_field(){
		$table=input('table');
		$id=intval(input('id'));
		$key=input('_key');
		$value=input('value');
		if(!isset($key)) $key='status';
		if(!isset($value)) $value=1;
		if($table=='category'){
			$info=Db::name('category')->where('id',$id)->field('lock')->find();
			if($info['lock']==1){
				$this->error('该栏目被根管理员锁定，无法删除！');
			}
		}
		$data['id']=$id;
		$data[$key]=$value;
		$status=update($table,$data);
		if($status==1){
			$this->success('操作成功！');
		}else{
			$this->error('操作失败！');
		}
	}

	public function ck_upload(){ //图片上传
		// 获取表单上传文件 例如上传了001.jpg
	    $file = $this->request->file('file');
	    // 移动到框架应用根目录/public/uploads/ 目录下
	    $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
	    if($info){
	    	$i='/uploads/'.date('Ymd',time()).'/'.$info->getFilename();
			$this->success($i);
	    }else{
	        // 上传失败获取错误信息
	        //echo "<font color=red size=2>*".$file->getError()."</font>"; 
	    	$this->error($file->getError());
		}
	}
	
	public function del_pic(){
		$name=input('name');
		$new_name=str_replace('/', '\\', $name);
		$root=$_SERVER['DOCUMENT_ROOT'].$new_name;
		if(file_exists($root)){
			$status=@unlink($root);
		}else{
			$this->error('文件不存在！');
		}
		if($status){
			$this->success('Pic删除成功！');
		}else{
			$this->error('Pic删除失败！');
		}
	}
	

	//系统设置
	public function sys_setting(){
		if($this->request->isPost()){
			$post=input('post.');
			unset($post['fileselect']);
			unset($post['__hash__']);
			$config=Db::name('config')->select();
			$arr=array();
			$i=1;
			foreach($post as $k=>$v){
				if($config[$i-1]['v']!=$v){
					
					$data['id']=$i;
					$data['v']=$v;
					update('config',$data);
				}
				$i++; 
			}
			$this->success('成功提交！');
		}else{
			$info=Db::name('config')->select();
			$arr=array();
			foreach($info as $v){
				$arr[$v['k']]=$v['v'];
			}
			$this->assign('info',$arr);
			return view();
		}
	}



	public function user_group(){
		$id=input('id');
		if($this->request->isPost()){
			$rules=input('auth/a');
			$title=input('title');
			if(empty($title)) $this->error('名称不能为空！');
			if(empty($rules)) $this->error('权限不能为空！');
			if(is_array($rules)){
				$rules=implode(',',$rules);
			}
			$data['title']=$title;
			$data['rules']=$rules;
			if($id){
				$data['id']=$id;
				$status=update('auth_group',$data);
			}else{
				$status=add('auth_group',$data);
			}
			if(is_numeric($status)){
				$this->success('操作成功！');
			}else{
				$this->error('操作失败！');
			}
		}else{
			$data['info']=1;
			if($id){
				$info=Db::name('auth_group')->where('id',$id)->find();
				if(is_array($info)){
					$info['rules']=explode(',',$info['rules']);
					$data['info']=$info;
				}
			}
			$auth_group=Db::name('auth_group')->paginate();
			$data['page']=$auth_group->render();
			$data['group_list']=$auth_group;
			
			$result=Db::name('auth_rule')->order('sort asc')->select();
			
			$this->assign($data);
			$this->assign('list',$result);
			return view();
		}
	}
	

	
	public function user_setting(){
		$id=input('id');
		if($this->request->isPost()){
			$name=input('name');
			$pass=input('pass');
			$group_id=input('group_id');
			if(empty($name)) $this->error('名称不能为空！');
			if(empty($group_id)) $this->error('分组不能为空！');
			if(empty($id)&&empty($pass)){
					$pass=123456;
			}
			$u_data['name']=$name;
			$u_data['pass']=md5($pass);
			if($id){
				if(empty($pass)){
					unset($u_data['pass']);
				}
				$u_data['id']=$id;
				$status=update('users',$u_data);
			}else{
				$status=add('users',$u_data);
			}
			if(is_numeric($status)){
				if($id){
					$u_id=$id;
				}else{
					$u_id=$status;
				}
				$g_data['uid']=$u_id;
				$g_data['group_id']=$group_id;
				if($id){
					$status_2=update('auth_group_access',$g_data);
				}else{
					$status_2=add('auth_group_access',$g_data);
				}
				$this->success('操作成功！');
			}else{
				$this->error('操作失败！');
			}
		}else{
			$data['info']=1;
			if($id){
				$info=Db::view('users','id,name')->view('auth_group_access','*','auth_group_access.uid=users.id')->where('users.id',$id)->find();
				if(is_array($info)){
					$data['info']=$info;
				}
			}
			$users_list=Db::view('users','*')->view('auth_group_access','*','auth_group_access.uid=users.id')->view('auth_group','title','auth_group.id=auth_group_access.group_id')->where('users.status','neq',-1)->paginate();
			$data['page']=$users_list->render();
			$data['users_list']=$users_list;
			$result=Db::name('auth_group')->select();
			$this->assign($data);
			$this->assign('list',$result);
			return view();
		}
	}
	
	//获取当前所有action
	private function get_action(){
		$data = get_class_methods("app\\admin\\controller\\Index");
		return array_diff($data,config('auth_filter'));
	}
	
	public function changepw(){
		if($this->request->isPost()){
			$id=session('user_id');
			$oldpw=md5(input('oldpw'));
			$newpw=md5(input('newpw'));
			$pw=Db::name('users')->where('id',$id)->field('pass')->find();
			$pw=$pw['pass'];
			if($oldpw==$newpw){
				$this->error('两次密码相同！');
			}
			if($pw!=$oldpw){
				$i=session('pwerr');
				if(!isset($i)){
					$i=0;
				}
				$i++;
				session('pwerr',$i);
				$this->error('旧密码错误！');
			}
			$data['id']=$id;
			$data['pass']=$newpw;
			$status=update('users',$data);
			if(is_numeric($status)){
				session(null);
				$this->success('修改成功,请重新登陆！');
			}else{
				$this->error('修改失败！');
			}
		}else{
			$this->error('非法进入！');
		}
		
	}
	
	public function logout(){
		session(null);
		$this->success('成功注销！');
	}
/*//测试接口
	
    public function ceshi()
    {
    	$ceshi = file_get_contents("http://api.kaijiangtong.com/lottery/?name=jndklb&format=json&uid=810446&token=76401c4e51118ba93b9545474395dbe4e5f558b7");
    	print_r($ceshi);die;
    	
    }
    }
*/
}