<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"D:\freehostnew\canadalotter\web\public/../application/admin\view\login\index.html";i:1510026980;}*/ ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>后台登录</title>
<meta name="author" content="DeathGhost" />
<link rel="Bookmark" href="/static/assets/ico/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="/static/admin/css/style.css" tppabs="css/style.css" />
<style>
body{height:100%;background-image:url('/static/assets/img/gallery/admin-login-bg.jpg');overflow:hidden;}
canvas{z-index:-1;position:absolute;}
</style>
<script src="/static/admin/js/jquery.js"></script>
<script src="/static/js/layer/layer.js"></script>
<script src="/static/admin/js/Particleground.js" tppabs="js/Particleground.js"></script>
<script>
$(document).ready(function() {
  //粒子背景特效
  $('body').particleground({
    dotColor: '#5cbdaa',
    lineColor: '#5cbdaa'
  });

});
</script>
</head>
<body>
	<form action="<?=url('login')?>" method="post">
<dl class="admin_login">
 <dt>
  <strong style="color: #fff;font-size: 20px; text-shadow:5px 5px 5px #2c2c2c">后台管理系统</strong>
  <em style="color: #fff;font-size: 20px; text-shadow:5px 5px 5px #2c2c2c">Management System</em>
 </dt>
 <dd class="user_icon">
  <input type="text" placeholder="账号" name="user" class="login_txtbx"/>
 </dd>
 <dd class="pwd_icon">
  <input type="password" placeholder="密码" name="pass" class="login_txtbx"/>
 </dd>
 <dd class="val_icon">
  <div class="checkcode" >
    <input type="text" name="code" style="padding-right: 0px;" id="J_codetext" placeholder="验证码" maxlength="4" class="login_txtbx">
    <img src="<?=captcha_src()?>" class="js_img" style="cursor: pointer;margin:0px 0px 6px 0px;" />
  </div>
  
 </dd>
 <dd>
  <input type="submit" value="立即登陆" class="submit_btn"/>
 </dd>
 <dd>
  <p style="font-size:20px;color:#000;text-shadow:2px 5px 5px #2c2c2c">© 2005-<?=date('Y')?> &copy;天下互通</p>
  <p></p>
 </dd>
</dl>
</form>
<script>
	$(".js_img").click(function(){
			chage_code();
	});
	function chage_code(){
		var u=$(".js_img").attr('src');
		$(".js_img").attr('src',u);
	}
</script>
  <script>    
    function detectBrowser()
    {
	    var browser = navigator.appName
	    if(navigator.userAgent.indexOf("MSIE")>0){ 
		    var b_version = navigator.appVersion
			var version = b_version.split(";");
			var trim_Version = version[1].replace(/[ ]/g,"");
		    if ((browser=="Netscape"||browser=="Microsoft Internet Explorer"))
		    {
		    	if(trim_Version == 'MSIE8.0' || trim_Version == 'MSIE7.0' || trim_Version == 'MSIE6.0'){
		    		alert('请使用IE9.0版本以上进行访问');
		    		return;
		    	}
		    }
	    }
   }
    detectBrowser();
   </script>
</body>
</html>
<SCRIPT Language=VBScript><!--

//--></SCRIPT>