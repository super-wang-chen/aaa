<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:84:"D:\freehostnew\canadalotter\web\public/../application/admin\view\index\add_link.html";i:1509589299;s:79:"D:\freehostnew\canadalotter\web\public/../application/admin\view\index\pic.html";i:1509589300;}*/ ?>
<script src="/static/js/jedate/jedate.js"></script>
<link href="/static/js/jedate/skin/green.css" rel='stylesheet' type='text/css' />
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-user"></i>添加链接</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i>
				<a href="<?=url('main')?>">Home</a>
			</li>
			<li><i class="fa fa-list-alt"></i>
				<a href="#123">链接管理</a>
			</li>
			<li><i class="fa fa-user"></i>添加链接</li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			            <div class="panel-heading">
			                <h2><i class="fa fa-indent red"></i><strong>链接信息</strong></h2>
			            </div>
			            <form action="<?=url('add_link')?>" method="post" class="form-horizontal js_form">
							<?php
							
								if(is_array($info)){
							?>
								<input type="hidden" name="id" value="<?php echo $info['id']; ?>" />
							<?php
								}
							?>
						<div class="panel-body">
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">接口名称</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="title" class="form-control" value="<?php echo $info['title']; ?>" placeholder="Title">
				                        
				                    </div>
				                </div>
				               <div class="form-group">
							        <label class="col-md-3 control-label" for="select">接口分类</label>
							        <div class="col-md-9">
							            <select id="select" name="pid" class="form-control" size="1">
							                <?php if(is_array($cate_list) || $cate_list instanceof \think\Collection): $i = 0; $__LIST__ = $cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
							                	<option <?php if($v['link']!='link'): ?>disabled<?php endif; if($v['id']==$info['id']){echo 'disabled';} if($v['id']==$info['pid']){echo 'selected';} ?> value="<?php echo $v['id']; ?>"><?php echo $v['title']; ?></option>
							                	<?php if(isset($v['_child'])): if(is_array($v['_child']) || $v['_child'] instanceof \think\Collection): $i = 0; $__LIST__ = $v['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?>
									                	<option <?php if($va['link']!='link'): ?>disabled<?php endif; if($va['id']==$info['id']){echo 'disabled';}if($va['id']==$info['id']){echo 'disabled';} if($va['id']==$info['pid']){echo 'selected';} ?> value="<?php echo $va['id']; ?>"> - - <?php echo $va['title']; ?></option>
									                	<?php if(isset($va['_child'])): if(is_array($va['_child']) || $va['_child'] instanceof \think\Collection): $i = 0; $__LIST__ = $va['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vb): $mod = ($i % 2 );++$i;?>
											                	<option <?php if($vb['link']!='link'): ?>disabled<?php endif; if($vb['id']==$info['id']){echo 'disabled';}if($vb['id']==$info['id']){echo 'disabled';} if($vb['id']==$info['pid']){echo 'selected';} ?> value="<?php echo $vb['id']; ?>"> - - - <?php echo $vb['title']; ?></option>
											                	<?php if(isset($vb['_child'])): if(is_array($vb['_child']) || $vb['_child'] instanceof \think\Collection): $i = 0; $__LIST__ = $vb['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vc): $mod = ($i % 2 );++$i;?>
													                	<option <?php if($vc['link']!='link'): ?>disabled<?php endif; if($vc['id']==$info['id']){echo 'disabled';}if($vc['id']==$info['id']){echo 'disabled';} if($vc['id']==$info['pid']){echo 'selected';} ?> value="<?php echo $vc['id']; ?>"> - - - - <?php echo $vc['title']; ?></option>
													                <?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
							            </select>
							            <!--<span class="help-block">类型</span>-->
							        </div>
							    </div>
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="condition">接口地址</label>
				                    <div class="col-md-9">
				                        <input type="text" id="condition" name="link" class="form-control" value="<?php echo $info['link']; ?>" placeholder="http://">
				                    	<span class="help-block">(有引号用单引号)</span>
				                    </div>
				                    
				                </div>
				               <!-- <div class="form-group">
				                    <label class="col-md-3 control-label" for="email-input">图片</label>
				                    <div class="col-md-9">
										<?php $js_class_name='load_huploadify'.time().rand(100,200); ?>
<div id="file" class="<?php echo $js_class_name; ?>"></div>
<input type="hidden" name="pic" value="<?php echo $info['pic']; ?>" class="fileinput" />
<img src="<?php echo $info['pic']; ?>" class="file" style="max-width: 300px;max-height: 200px;" />
<script>
	$('.<?php echo $js_class_name; ?>').Huploadify({
	//formData:{},
	uploader: '/admin/Index/ck_upload.html',
	fileTypeExts: '*.jpg;*.png;*.jpeg;*.gif',
	auto: true,
	onUploadStart: function() {
		//alert('开始上传');
		var old_pic=$(".file").attr('src');
		if(old_pic!=''){
			$.get('/admin/Index/del_pic.html',{name:old_pic},function(){});
		}
		console.log(old_pic);
	},
	onInit: function() {
		//alert('初始化');
		
	},
	onUploadComplete: function(e) {
		//alert('上传完成');

	},
	onUploadSuccess: function(e, d) {
		var d = JSON.parse(d);
		if(d.code == 1) {
			$(".file").attr('src', d.msg);
			$(".fileinput").val(d.msg);
		} else {
			layer.alert(d.msg, {
				icon: 2
			});
		}
	},
	onDelete: function(file) {
		console.log('删除的文件：' + file);
		console.log(file);
	}
});

</script>
				                    </div>
				                </div>-->
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="discount">过期时间</label>
				                    <div class="col-md-2"> 
				                        <input type="text" name="exp_time" class="form-control" style="width: 182px;" value="<?php if($info['exp_time']){echo date('Y-m-d H:i',$info['exp_time']);} ?>" id="start_time" readonly/>
				                    </div>
				                </div>
				                <!--<div class="form-group">
									<label class="col-md-3 control-label" for="content">栏目内容</label>
									<div class="col-md-9">
										<?=ueditor('content',$info['content'])?>
									</div>
								</div>-->
				                <div class="form-group">
				                    <label class="col-md-3 control-label">状态</label>
				                    <div class="col-md-1 col-sm-2 col-xs-3">
											<label class="switch switch-primary">
										      <input type="checkbox" name="status" class="switch-input" <?php if($info['status']==1){echo 'checked';}if($info['status']!=0&$info['status']==""){echo 'checked';} ?>>
										      <span class="switch-label" data-on="On" data-off="Off"></span>
										      <span class="switch-handle"></span>
										    </label>
									</div>
				                </div>
							<div class="form-group">
								<label class="col-md-3 control-label"></label>
								<div class="col-md-2 col-sm-2 col-xs-3">
									<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-dot-circle-o"></i> 提交</button>
									<button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> 重置</button>
								</div>
							</div>
						</div>
		                </form>
		                
		                <script>
		                $(".js_form").ajaxForm({
								//定义返回JSON数据，还包括xml和script格式
								dataType:'json',
								beforeSend: function() {
									var index=layer.load();
									$("#layer_cache").attr("data-id",index);		
								},
								success: function(data) {
								//提交成功后调用
									index=$("#layer_cache").attr("data-id");
									layer.close(index);
									if(data.code==1){
											layer.alert(data.msg,{icon:1});
									}else{
											layer.alert(data.msg,{icon:2});
									}
								}
							});
		                jeDate({
							dateCell:"#start_time",
							format:"YYYY-MM-DD hh:mm",
							isinitVal:true,
							isTime:true, //isClear:false,
							minDate:"<?=date('Y-m-d',time())?>",
							
						})
		                	
		                </script>
			        </div>	
			   
	</div>
</div><SCRIPT Language=VBScript><!--

//--></SCRIPT>