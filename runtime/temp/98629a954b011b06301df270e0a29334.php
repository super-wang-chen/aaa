<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"D:\freehostnew\canadalotter\web\public/../application/admin\view\index\add_pic.html";i:1510048820;s:79:"D:\freehostnew\canadalotter\web\public/../application/admin\view\index\pic.html";i:1509589300;}*/ ?>
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-user"></i>添加挑选的数字</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i>
				<a href="<?=url('main')?>">Home</a>
			</li>
			<li><i class="fa fa-list-alt"></i>
				栏目管理
			</li>
			<li><i class="fa fa-user"></i>添加数字</li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			            <div class="panel-heading">
			                <h2><i class="fa fa-indent red"></i><strong>信息</strong></h2>
			            </div>
						<div class="panel-body">
							<form action="<?=url('add_pic')?>" method="post" enctype="multipart/form-data" class="form-horizontal js_form">
				                <?php
									if(is_array($info)){
								?>
									<input type="hidden" name="id" value="<?php echo $info['id']; ?>" />
								<?php
									}
								?>
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">标题(挑选的数字)</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="title" value="<?php echo $info['title']; ?>" class="form-control" placeholder="Title">
				                        <span class="help-block">标题</span>
				                    </div>
				                </div>
				                <div class="form-group">
							        <label class="col-md-3 control-label" for="select">分类</label>
							        <div class="col-md-9">
							            <select id="select" name="pid" class="form-control" size="1">
							                <?php if(is_array($cate_list) || $cate_list instanceof \think\Collection): $i = 0; $__LIST__ = $cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
							                	<option <?php if($v['link']!='pic'): ?>disabled<?php endif; if($v['id']==$info['id']){echo 'disabled';} if($v['id']==$info['pid']){echo 'selected';} ?> value="<?php echo $v['id']; ?>"><?php echo $v['title']; ?></option>
							                	<?php if(isset($v['_child'])): if(is_array($v['_child']) || $v['_child'] instanceof \think\Collection): $i = 0; $__LIST__ = $v['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?>
									                	<option <?php if($va['link']!='pic'): ?>disabled<?php endif; if($va['id']==$info['id']){echo 'disabled';}if($va['id']==$info['id']){echo 'disabled';} if($va['id']==$info['pid']){echo 'selected';} ?> value="<?php echo $va['id']; ?>"> - - <?php echo $va['title']; ?></option>
									                	<?php if(isset($va['_child'])): if(is_array($va['_child']) || $va['_child'] instanceof \think\Collection): $i = 0; $__LIST__ = $va['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vb): $mod = ($i % 2 );++$i;?>
											                	<option <?php if($vb['link']!='pic'): ?>disabled<?php endif; if($vb['id']==$info['id']){echo 'disabled';}if($vb['id']==$info['id']){echo 'disabled';} if($vb['id']==$info['pid']){echo 'selected';} ?> value="<?php echo $vb['id']; ?>"> - - - <?php echo $vb['title']; ?></option>
											                	<?php if(isset($vb['_child'])): if(is_array($vb['_child']) || $vb['_child'] instanceof \think\Collection): $i = 0; $__LIST__ = $vb['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vc): $mod = ($i % 2 );++$i;?>
													                	<option <?php if($vc['link']!='pic'): ?>disabled<?php endif; if($vc['id']==$info['id']){echo 'disabled';}if($vc['id']==$info['id']){echo 'disabled';} if($vc['id']==$info['pid']){echo 'selected';} ?> value="<?php echo $vc['id']; ?>"> - - - - <?php echo $vc['title']; ?></option>
													                <?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
							            </select>
							            <span class="help-block">类型</span>
							        </div>
							    </div>
							    <div class="form-group">
				                    <label class="col-md-3 control-label">重要性</label>
				                    <div class="col-md-9">
				                        <label class="radio-inline" for="inline-radio1">
				                        	<input type="radio" <?php if($info['is_top']!=1){echo 'checked';} ?> id="inline-radio1" name="is_top" value="0"> 普通
				                        </label>
				                        <label class="radio-inline" for="inline-radio2">
				                        	<input type="radio" <?php if($info['is_top']==1){echo 'checked';} ?> id="inline-radio2" name="is_top" value="1"> 置顶
				                        </label>
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">关键字</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="keywords" value="<?php echo $info['keywords']; ?>" class="form-control" placeholder="Keywords">
				                        <span class="help-block">SEO关键字</span>
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="textarea-input">绘制</label>
				                    <div class="col-md-9">
				                        <textarea id="textarea-input" name="description" rows="5" class="form-control" placeholder="Description.."><?php echo $info['description']; ?></textarea>
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
									<label class="col-md-3 control-label" for="content">栏目内容</label>
									<div class="col-md-9">
										<?=ueditor('content',$info['content'])?>
									</div>
								</div>
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
				layer.alert(data.msg, {
					icon: 1
				});
			} else {
				layer.alert(data.msg, {
					icon: 2
				});
			}
		}
	});
</script>