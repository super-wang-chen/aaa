<?php

/*
 * author : 安德兔
 * link : http://www.andetu.com/code/1860
 */

namespace app\index\model;
use think\Validate;
use think\Log;
use think\Db;
class Pay extends \think\Model
{
	public static $alipay_config = [
										'partner' 			=> '2088621552906831',//支付宝partner，2088开头数字
										'seller_id' 		=> '2088621552906831',//支付宝partner，2088开头数字
										'key' 				=> 'ydbbyv10cjjnyfgdwf2avi4vrlk4wkwb',//支付宝密钥
										'sign_type' 		=> 'MD5',
										'input_charset' 	=> 'utf-8',
										'cacert' 			=> '',
										'transport' 		=> 'http',
										'payment_type' 		=> '1',
										'service' 			=> 'create_direct_pay_by_user',
										'anti_phishing_key'	=> '',
										'exter_invoke_ip' 	=> '',
									];
	public static $alipaywap_config = [
										'partner' 			=> '2088621552906831',//支付宝partner，2088开头数字
										'seller_id' 		=> '2088621552906831',//支付宝partner，2088开头数字
										'key' 				=> 'ydbbyv10cjjnyfgdwf2avi4vrlk4wkwb',//支付宝密钥
										'sign_type' 		=> 'MD5',
										'input_charset' 	=> 'utf-8',
										'cacert' 			=> '',
										'transport' 		=> 'http',
										'payment_type' 		=> '1',
										'service' 			=> 'alipay.wap.create.direct.pay.by.user',
										'anti_phishing_key'	=> '',
										'exter_invoke_ip' 	=> '',
									];

	public function alipay($data=[],$is_wap=0)
	{
		$validate = new Validate([
			['out_trade_no','require|alphaNum','订单编号输入错误|订单编号输入错误'],
			['total_fee','require|number|gt:0','金额输入错误1|金额输入错误2|金额输入错误3'],
			['subject','require','请输入标题'],
			['body','require','请输入描述'],
			['notify_url','require','异步通知地址不为空'],
		]);
		if (!$validate->check($data)) {
			return ['code'=>0,'msg'=>$validate->getError()];
		}
		$config = self::$alipay_config;
		if($is_wap){
			$config = self::$alipaywap_config;
		}
		
		vendor('alipay.alipay');
		$parameter = [
			"service"       	=> $config['service'],
			"partner"       	=> $config['partner'],
			"seller_id"  		=> $config['seller_id'],
			"payment_type"		=> $config['payment_type'],
			"notify_url"		=> $data['notify_url'],
			"return_url"		=> $data['return_url'],
			"anti_phishing_key"	=> $config['anti_phishing_key'],
			"exter_invoke_ip"	=> $config['exter_invoke_ip'],
			"out_trade_no"		=> $data['out_trade_no'],
			"subject"			=> $data['subject'],
			"total_fee"			=> $data['total_fee'],
			"body"				=> $data['body'],
			"_input_charset"	=> $config['input_charset']
		];
		$alipaySubmit = new \AlipaySubmit($config);
		return ['code'=>1,'msg'=>$alipaySubmit->buildRequestForm($parameter,"get", "确认")];
	}

	public function notify_alipay()
	{
		$config = self::$alipay_config;
		vendor('alipay.alipay');
		$alipayNotify = new \AlipayNotify($config);
		$result = $alipayNotify->verifyNotify();
		
		Log::write($result,'log');
		if($result){
			if(input('trade_status') == 'TRADE_FINISHED' || input('trade_status') == 'TRADE_SUCCESS') {
				// 处理支付成功后的逻辑业务
				
				//商户订单号
				$out_trade_no = input('out_trade_no');

				//支付宝交易号
				$trade_no = input('trade_no');

				//交易状态
				$trade_status =input('trade_status');
				
				//付款人账号
				$buyer_email=input('buyer_email');
				
				$info=Db::name('order_list')->where('id',$out_trade_no)->find();
				if(is_array($info)){
					if($info['pay_status']!=0){
						return 'fail';
					}else{
						$d['id']=$out_trade_no;
						$d['pay_user']=$buyer_email;
						$d['pay_status']=1;
						$status=update('order_list',$d);
						if($status==1){
							return 'success';
						}else{
							return 'fail';
						}
					}
				}else{
					return 'fail';
				}
				
				//return 'success';
			}
			return 'fail';
		}
		return 'fail';
	}
	
	//同步通知
	public function return_url()
	{
		$config = self::$alipay_config;
		vendor('alipay.alipay');
		$alipayNotify = new \AlipayNotify($config);
		$result = $alipayNotify->verifyReturn();
		
		if($result){
			if(input('trade_status') == 'TRADE_FINISHED' || input('trade_status') == 'TRADE_SUCCESS') {
				// 处理支付成功后的逻辑业务
				
				//商户订单号
				$out_trade_no = input('out_trade_no');

				//支付宝交易号
				$trade_no = input('trade_no');

				//交易状态
				$trade_status =input('trade_status');
				
				//付款人账号
				$buyer_email=input('buyer_email');
				
				$info=Db::name('order_list')->where('id',$out_trade_no)->find();
				if(is_array($info)){
					if($info['pay_status']==1||$info['pay_status']==2){
						return 'success';
					}else{
						$d['id']=$out_trade_no;
						$d['pay_user']=$buyer_email;
						$d['pay_status']=1;
						$status=update('order_list',$d);
						if($status==1){
							return 'success';
						}else{
							return '更新失败，请联系管理员！';
						}
					}
				}else{
					return '订单错误，请联系管理员！';
				}
				
				//return 'success';
			}
		}else{
			return '访问非法';
		}
	}
}
?>