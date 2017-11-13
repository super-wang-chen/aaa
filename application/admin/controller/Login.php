<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class Login extends Controller
{
	public function index(){
		if(session("?user_id")){
        	$this->redirect(url('/admin/Index/index'));
        }
		return view();
	}
	
	public function login(){		
		$request=request();
		if($request->isPost()){
			$user=input('user');
			$pass=md5(input('pass'));
			$code=input('code');
			if(!captcha_check($code)){
				$this->error('验证码错误！');
			}
			$user_info=Db::name('users')->where('name',$user)->find();
			if(is_array($user_info)){
				if($pass==$user_info['pass']){
					$ip=request()->ip();
					$user_info['face_url'] = "/static/assets/img/avatar".rand(1,7).".jpg";
					//print_r($face);die;										
					session('user_id',$user_info['id']);
					session('face_url',$user_info['face_url']);
					session('user_name',$user_info['name']);
					session('now_ip',$ip);
					$d['id']=$user_info['id'];
					$d['login_ip']=$ip;
					$d['login_time']=time();
					Db::name('users')->update($d);
					$this->redirect(url('/admin/Index/index'));
				}else{
					$this->error('密码错误！');
				}
			}else{
				$this->error('用户名不存在！');
			}
			
		}
		
	}
	
	
}