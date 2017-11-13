<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:87:"D:\freehostnew\canadalotter\web\public/../application/admin\view\index\sys_setting.html";i:1509589300;s:79:"D:\freehostnew\canadalotter\web\public/../application/admin\view\index\pic.html";i:1509589300;}*/ ?>
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-user"></i>系统设置</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i>
				<a href="<?=url('main')?>">Home</a>
			</li>
			<li><i class="fa fa-list-alt"></i>
				系统设置
			</li>
			<li><i class="fa fa-user"></i>系统设置</li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			            <div class="panel-heading">
			                <h2><i class="fa fa-indent red"></i><strong>系统设置</strong></h2>
			            </div>
						<div class="panel-body">
							<form action="<?=url('sys_setting')?>" method="post" enctype="multipart/form-data" class="form-horizontal js_form">
				                
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">站点名称</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="site_name" value="<?php echo $info['site_name']; ?>" class="form-control" placeholder="Name">
				                        <span class="help-block">站点名称</span>
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">站点标题</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="site_title" value="<?php echo $info['site_title']; ?>" class="form-control" placeholder="Title">
				                        <span class="help-block">显示在浏览器的标题栏</span>
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">描述</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="description" value="<?php echo $info['description']; ?>" class="form-control" placeholder="Description">
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">站点关键字</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="keywords" value="<?php echo $info['keywords']; ?>" class="form-control" placeholder="Keywords">
				                    	<span class="help-block">多个以英文逗号隔开</span>
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">在线咨询</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="site_qq" value="<?php echo $info['site_qq']; ?>" class="form-control" placeholder="QQ">
				                        <span class="help-block">多个以英文逗号隔开</span>
				                    </div>
				                </div>
				                
							    <div class="form-group">
				                    <label class="col-md-3 control-label">站点状态</label>
				                    <div class="col-md-9">
				                        <label class="radio-inline" for="inline-radio1">
				                        	<input type="radio" <?php if($info['site_close']==1){echo 'checked';} ?> id="inline-radio1" name="site_close" value="1"> 开启
				                        </label>
				                        <label class="radio-inline" for="inline-radio2">
				                        	<input type="radio" <?php if($info['site_close']==0){echo 'checked';} ?> id="inline-radio2" name="site_close" value="0"> 关闭
				                        </label>
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="textarea-input">关闭站点原因</label>
				                    <div class="col-md-9">
				                        <textarea id="textarea-input" name="site_close_content" rows="5" class="form-control" placeholder="Content.."><?php echo $info['site_close_content']; ?></textarea>
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label class="col-md-3 control-label">logo</label>
				                    <div class="col-md-9">
				                    	<?php $js_class_name='load_huploadify'.time().rand(100,200); ?>
<div id="filelogo" class="<?php echo $js_class_name; ?>"></div>
<input type="hidden" name="site_logo" value="<?php echo $info['site_logo']; ?>" class="filelogoinput" />
<img src="<?php echo $info['site_logo']; ?>" class="filelogo" style="max-width: 300px;max-height: 200px;" />
<script>
	$('.<?php echo $js_class_name; ?>').Huploadify({
	//formData:{},
	uploader: '/admin/Index/ck_upload.html',
	fileTypeExts: '*.jpg;*.png;*.jpeg;*.gif',
	auto: true,
	onUploadStart: function() {
		//alert('开始上传');
		var old_pic=$(".filelogo").attr('src');
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
			$(".filelogo").attr('src', d.msg);
			$(".filelogoinput").val(d.msg);
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
				                </div>            

<!--电话添加	-->			        <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">联系电话</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="site_tel" value="<?php echo $info['site_tel']; ?>" class="form-control" placeholder="Tel">
				                        <span class="help-block"></span>
				                    </div>
				                </div>
							
<!--联系地址-->			        <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">联系地址</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="site_address" value="<?php echo $info['site_address']; ?>" class="form-control">
				                        <span class="help-block"></span>
				                    </div>
				                </div>
								
<!--邮箱-->			        <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">邮箱</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="site_email" value="<?php echo $info['site_email']; ?>" class="form-control">
				                        <span class="help-block"></span>
				                    </div>
				                </div>
				                
<!--联系人-->			      			                
				  			<div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">联系人</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="site_contacter" value="<?php echo $info['site_contacter']; ?>" class="form-control">
				                        <span class="help-block"></span>
				                    </div>
				                </div>			            
				                
<!--官方网站-->			      			                
				  			<div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">官网网站</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="site_wangzhi" value="<?php echo $info['site_wangzhi']; ?>" class="form-control">
				                        <span class="help-block"></span>
				                    </div>
				                </div>		
<!--技术支持-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="text-input">技术支持</label>
									<div class="col-md-9">
										<input type="text" id="text-input" name="site_jishu" value="<?php echo $info['site_jishu']; ?>" class="form-control">
										<span class="help-block"></span>
									</div>
								</div>				                		                				                
<!--版权-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="text-input">版权所有</label>
									<div class="col-md-9">
										<input type="text" id="text-input" name="site_copyright" value="<?php echo $info['site_copyright']; ?>" class="form-control">
										<span class="help-block"></span>
									</div>
								</div>
								<!--底部提交-->
				                <div class="form-group">
									<label class="col-md-3 control-label"></label>
									<div class="col-md-2 col-sm-2 col-xs-3">
										<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-dot-circle-o"></i> 提交</button>
										<button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> 重置</button>
									</div>
								</div>
								<br>
				            </form>
						</div>
						<div class="panel-footer">
		                </div>	
			        </div>

	</div>
</div>
<script>
	$(".js_form").ajaxForm({
		//定义返回JSON数据，还包括xml和script格式
		dataType: 'json',
		beforeSend: function() {
			var index = layer.load();
			$("#layer_cache").attr("data-id", index);
		},
		beforeSerialize:function(){
			
		},
		success: function(data) {
			//提交成功后调用
			index = $("#layer_cache").attr("data-id");
			layer.close(index);
			if(data.code == 1) {
				var layer_i=layer.alert(data.msg, {
					icon: 1
				},function(){
					layer.close(layer_i);
					location_reload();
				});
			} else {
				layer.alert(data.msg, {
					icon: 2
				});
			}
		}
	});
	function location_reload(){
		$.post('<?php echo $now_url; ?>',{'_method':'get'},function(e){
			$(".js_main").html(e);
			$('html,body').animate({scrollTop: '0px'}, 500);
		});
	}
</script>