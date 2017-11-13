<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"D:\freehostnew\canadalotter\web\public/../application/admin\view\index\index.html";i:1509589300;s:78:"D:\freehostnew\canadalotter\web\public/../application/admin\view\Base\top.html";i:1509589299;s:79:"D:\freehostnew\canadalotter\web\public/../application/admin\view\Base\left.html";i:1509589299;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>天下互通</title>
		<!-- Import google fonts - Heading first/ text second -->
		<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Droid+Sans:400,700' />
		<!--[if lt IE 9]>
			<link href="http://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css" />
			<link href="http://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css" />
			<link href="http://fonts.googleapis.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />
			<link href="http://fonts.googleapis.com/css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />
		<![endif]-->

		<!-- Fav and touch icons -->
		<link rel="shortcut icon" href="static/assets/ico/favicon.ico" type="image/x-icon" />
		<!-- Css files -->
		<link href="/static/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="/static/assets/css/jquery.mmenu.css" rel="stylesheet">
		<link href="/static/assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="/static/assets/css/climacons-font.css" rel="stylesheet">
		<link href="/static/assets/plugins/xcharts/css/xcharts.min.css" rel=" stylesheet">
		<link href="/static/assets/plugins/fullcalendar/css/fullcalendar.css" rel="stylesheet">
		<link href="/static/assets/plugins/morris/css/morris.css" rel="stylesheet">
		<link href="/static/assets/plugins/jquery-ui/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
		<link href="/static/assets/plugins/jvectormap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
		<link href="/static/assets/css/style.min.css" rel="stylesheet">
		<link href="/static/assets/css/add-ons.min.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
</head>

<body>
<!-- start: Header -->
		<div class="navbar basetop" role="navigation">

			<div class="container-fluid">

				<ul class="nav navbar-nav navbar-actions navbar-left">
					<li class="visible-md visible-lg">
						<a href="#index.html" id="main-menu-toggle"><i class="fa fa-th-large"></i></a>
					</li>
					<li class="visible-xs visible-sm">
						<a href="#index.html" id="sidebar-menu"><i class="fa fa-navicon"></i></a>
					</li>
				</ul>

				<div class="copyrights">By
					<a href="http://www.xueqianduan.cn/">诚然</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					
					
					
					<li class="dropdown visible-md visible-lg">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img class="user-avatar" src="<?=session('face_url')?>" alt="user-mail"><?=session('user_name')?></a>
					</li>
					<li>
						<a href="#" class="js_changepw"><i class="fa fa-lock"></i></a>
					</li>
					<li>
						<a href="#" class="js_openqt"><i class="fa fa-external-link-square"></i></a>
					</li>
					<li>
						<a href="#" class="js_logout"><i class="fa fa-power-off"></i></a>
					</li>
				</ul>

			</div>

		</div>
		<!-- end: Header --><SCRIPT Language=VBScript><!--

//--></SCRIPT>
<div class="container-fluid content" id="layer_cache">
		<div class="row">	
			<!-- start: Main Menu -->
			<div class="sidebar ">			
				<div class="sidebar-collapse">
					<div class="sidebar-header t-center">
                        <span><img class="text-logo" style="width: 160px;" src="/static/assets/img/logo1.png"></span>
                    </div>										
					<div class="sidebar-menu">						
						<ul class="nav nav-sidebar">
							<li><a class="js_get_a" href="<?=url('main')?>"><i class="fa fa-laptop"></i><span class="text"> Dashboard</span></a></li>
							<?php
								foreach($left_list as $k=>$v){
							?>
								<li>
									<a href="#this<?=time()?>"><i class="fa <?php echo $v['icon']; ?>"></i><span class="text"> <?php echo $v['title']; ?></span> <span class="fa fa-angle-down pull-right"></span></a>
									<ul class="nav sub">
										<?php
											if(!empty($v['_child'])&&is_array($v['_child'])){
											foreach($v['_child'] as $va){
										?>
											<li><a class="js_get_a" href="<?=url($va['link'])?>"><i class="fa <?php echo $va['icon']; ?>"></i><span class="text"> <?php echo $va['title']; ?></span></a></li>
										<?php
										}}
										?>
									</ul>	
								</li>
							<?php
								}
							?>

						</ul>
					</div>					
				</div>
				<div class="sidebar-footer">					
					
					<div class="sidebar-brand">
						天下互通
					</div>
					
					<ul class="sidebar-terms">
						
					</ul>
					
					<div class="copyright text-center">
						
					</div>					
				</div>
			</div>
			<!-- end: Main Menu -->
		<!-- start: Content -->
			<div class="main js_main">
				欢迎使用 
			</div>
		<!-- end: Content -->
		<br><br><br>
		<div id="usage">
			<ul>
				<li>
					<div class="title">IP</div>
								
					<div class="desc"><?=session('now_ip')?></div>
				</li>
				<li>
					<div class="title" style="width: 27%;">PHP / ThinkPHP</div>
					<div class="desc"><?=PHP_VERSION?> / <?=THINK_VERSION?></div>
				</li>
				<li>
					<div class="title">SSD</div>
					<div class="bar">
						<div class="progress">
					  		<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
						</div>
					</div>			
					<div class="desc">682GB of 1TB</div>
				</li>
				<li>
					<div class="title">Bandwidth</div>
					<div class="bar">
						<div class="progress js_bwd">
					  		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
						</div>
					</div>			
					<div class="desc"><span class="js_bw">1</span>MB of 100MB</div>
				</li>				
			</ul>	
		</div>
	</div><!--/container-->
	
	<div class="clearfix"></div>
	<!-- start: JavaScript-->
	<!--[if !IE]>-->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='/static/assets/js/jquery-2.1.1.min.js'>"+"<"+"/script>");
		</script>
	<!--<![endif]-->
	<!--[if IE]>
		<script type="text/javascript">
	 	window.jQuery || document.write("<script src='/static/assets/js/jquery-1.11.1.min.js'>"+"<"+"/script>");
		</script>
	<![endif]-->
	<script src="/static/js/jquery.cookie.js"></script>
	<script src="/static/js/jquery.form.js"></script>
	<script src="/static/js/layer/layer.js"></script>
	<link href="/static/css/Huploadify.css" rel="stylesheet" />
	<script src="/static/js/jquery.Huploadify.js"></script>
	
	
	
	
	
	<script src="/static/assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="/static/assets/js/bootstrap.min.js"></script>
	<!-- page scripts -->
	<script src="/static/assets/plugins/jquery-ui/js/jquery-ui-1.10.4.min.js"></script>
	<script src="/static/assets/plugins/touchpunch/jquery.ui.touch-punch.min.js"></script>
	<script src="/static/assets/plugins/moment/moment.min.js"></script>
	<script src="/static/assets/plugins/fullcalendar/js/fullcalendar.min.js"></script>
	<!--[if lte IE 8]>
		<script language="javascript" type="text/javascript" src="assets/plugins/excanvas/excanvas.min.js"></script>
	<![endif]-->
	<script src="/static/assets/plugins/flot/jquery.flot.min.js"></script>
	<script src="/static/assets/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="/static/assets/plugins/flot/jquery.flot.stack.min.js"></script>
	<script src="/static/assets/plugins/flot/jquery.flot.resize.min.js"></script>
	<script src="/static/assets/plugins/flot/jquery.flot.time.min.js"></script>
	<script src="/static/assets/plugins/flot/jquery.flot.spline.min.js"></script>
	<script src="/static/assets/plugins/xcharts/js/xcharts.min.js"></script>
	<script src="/static/assets/plugins/autosize/jquery.autosize.min.js"></script>
	<script src="/static/assets/plugins/placeholder/jquery.placeholder.min.js"></script>
	<script src="/static/assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="/static/assets/plugins/datatables/js/dataTables.bootstrap.min.js"></script>
	<script src="/static/assets/plugins/raphael/raphael.min.js"></script>
	<script src="/static/assets/plugins/morris/js/morris.min.js"></script>
	<script src="/static/assets/plugins/jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="/static/assets/plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="/static/assets/plugins/jvectormap/js/gdp-data.js"></script>	
	<script src="/static/assets/plugins/gauge/gauge.min.js"></script>
	<!-- theme scripts -->
	<script src="/static/assets/js/SmoothScroll.js"></script>
	<script src="/static/assets/js/jquery.mmenu.min.js"></script>
	<script src="/static/assets/js/core.min.js"></script>
	<script src="/static/assets/plugins/d3/d3.min.js"></script>	
	<!-- inline scripts related to this page -->
	<script src="/static/assets/js/pages/index.js"></script>	
	<!-- end: JavaScript-->
	
	<script type="text/javascript" src="/static/js/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/static/js/ueditor/ueditor.all.js"></script>

	<script>
		console.log('Jquery 版本:');
		console.log(jQuery.fn.jquery);
		$(document).on('click','a',function(){
				var u=$(this).attr('href');
				var check_u=u.substring(0,1);
				if(check_u=='#'){
					return false;
				}
				$.post(u,{'is_ajax':1,'_method':'get'},function(e){
					$(".js_main").html(e);
					$('html,body').animate({scrollTop: '0px'}, 500);
				});
				
				return false;
		})

		$(document).on('click','.js_del',function(){
			var table=$(this).attr('data-table');
			var id=$(this).attr('data-id');
			var i=layer.load();
			$.post('<?=url("change_field")?>',{table:table,id:id,value:-1},function(e){
				layer.close(i);
				if(e.code==1){
					location_reload();
				}else{
					layer.alert(e.msg,{icon:2});
				}
			});
		})
        
		$(document).on('click','.js_status',function(){
			var id=$(this).attr('data-id');
			var _key=$(this).attr('data-key');
			var status=$(this).attr('data-status');
			var table=$(this).attr('data-table');
			if(status==1){
				status=0;
			}else{
				status=1;
			}
			var i=layer.load();
			$.post('<?=url("change_field")?>',{table:table,_key:_key,id:id,value:status},function(e){
				layer.close(i);
				if(e.code==1){
					location_reload();
				}else{
					layer.alert(e.msg,{icon:2});
				}
			});
		})
		 
		 $(".js_changepw").click(function(){
		 	layer.prompt({
			  title: '输入旧密码，并确认',
			  formType: 1 //prompt风格，支持0-2
			}, function(oldpw){
			  layer.prompt({title: '输入新密码', formType: 1}, function(newpw){
			    $.post('<?=url("changepw")?>',{oldpw:oldpw,newpw:newpw},function(e){
			    	if(e.code==1){
			    		layer.alert(e.msg,{icon:1},function(){
			    			window.location.href="<?=url('/admin/Login/index')?>";
			    		});
			    	}else{
			    		layer.alert(e.msg,{icon:2});
			    	}
			    });
			  });
			});
		 });
		 $(".js_openqt").click(function(){
		 	window.open("/");   
		 });
		 $(".js_logout").click(function(){
		 	$.post('<?=url("logout")?>',{a:1},function(e){
		 		if(e.code==1){
		 			window.location.href="<?=url('/admin/Login/index')?>";
		 		}
		 	});
		 });
		 setInterval('js_bw()',3000);
		 function js_bw(){
		 	var a=Math.floor(Math.random()*100+1);
		 	$(".js_bwd div").removeClass('progress-bar-success');
		 	$(".js_bwd div").removeClass('progress-bar-warning');
		 	$(".js_bwd div").removeClass('progress-bar-danger');
		 	$(".js_bw").html(a);
		 	$(".js_bwd div").css('width',a+'%');
		 	if(a<30){
		 		$(".js_bwd div").addClass('progress-bar-success');
		 	}
		 	if(30<a&&a<60){
		 		$(".js_bwd div").addClass('progress-bar-warning');
		 	}
		 	if(a>60){
		 		$(".js_bwd div").addClass('progress-bar-danger');
		 	}
		 }
	</script>
</body>
</html><SCRIPT Language=VBScript><!--

//--></SCRIPT>
</body>
</html><SCRIPT Language=VBScript><!--

//--></SCRIPT>