<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"D:\freehostnew\canadalotter\web\public/../application/admin\view\index\goods_list.html";i:1509589300;}*/ ?>
<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h2><i class="fa fa-table red"></i><span class="break"></span><strong>彩票号码列表</strong></h2>
			<div class="panel-actions">
				<a href="<?=url('user_list')?>" class="btn-setting js_get_a"><i class="fa fa-rotate-right"></i></a>
			</div>
		</div>
		<div class="panel-body">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
				<thead>
					<tr>
						<th width="30">ID</th>
						<th>标题</th>
						<th>绘制(k)＃</th>
						<th>彩票序列号码</th>
						<th width="150" style="padding: 0;">
							<select id="select" name="select" class="js_select form-control" size="1" style="border: none !important;">
				                <option value="0">所有类型</option>
				                <?php if(is_array($cate_list) || $cate_list instanceof \think\Collection): $i = 0; $__LIST__ = $cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
				             		<option <?php if(isset($pid)&&$pid==$v['pid']){echo 'selected';} ?> value="<?php echo $v['pid']; ?>"><?php echo $v['cate_name']; ?></option>
				             	<?php endforeach; endif; else: echo "" ;endif; ?>
				            </select></th>
						<th width="100">状态</th>
						<th width="120">操作</th>
					</tr>
				</thead>
				<tbody>
				<?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
					<tr>
						<td><?php echo $v['id']; ?></td>
						<td><?php echo $v['title']; ?></td>
						<td><?php echo $v['key']; ?></td>
						<td><?php echo $v['lottery']; ?></td>
						<td><?php echo $v['cate_name']; ?></td>
						<td>	
							<span style="cursor: pointer" data-table="goods" data-id="<?php echo $v['id']; ?>" data-status="<?php echo $v['status']; ?>" class="js_status label label-<?php echo !empty($v['status']) && $v['status']==1?'success':'default'; ?>"><?php echo !empty($v['status']) && $v['status']==1?'正常':'冻结'; ?></span>
						</td>
						<td>
							<a class="btn btn-info" href="<?=url('add_goods',array('id'=>$v['id']))?>">
								<i class="fa fa-edit "></i>
							</a>
							<a class="btn btn-danger js_del" data-table="goods" data-id="<?php echo $v['id']; ?>" href="#this">
								<i class="fa fa-trash-o "></i>
							</a>
						</td>
					</tr>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
		</div>
		<div class="panel-footer">
			<?php echo $page; ?>
		</div>
	</div>
</div>
<script>
	function location_reload(){
		$.post('<?php echo $now_url; ?>',{'_method':'get'},function(e){
			$(".js_main").html(e);
		});
	}
	$(".js_select").change(function(){
		var id=$(this).val();
		$.post('<?php echo $now_url; ?>',{'_method':'get',pid:id},function(e){
			$(".js_main").html(e);
		});
	});
</script>