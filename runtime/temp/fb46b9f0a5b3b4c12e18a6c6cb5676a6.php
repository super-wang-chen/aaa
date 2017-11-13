<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"D:\freehostnew\canadalotter\web\public/../application/admin\view\index\lyb_list.html";i:1509589300;}*/ ?>
<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h2><i class="fa fa-table red"></i><span class="break"></span><strong>留言列表</strong></h2>
			<div class="panel-actions">
				<a href="<?=url('user_list')?>" class="btn-setting js_get_a"><i class="fa fa-rotate-right"></i></a>
			</div>
		</div>
		<div class="panel-body">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
				<thead>
					<tr>
						<th width="30">ID</th>
						<th>留言内容</th>
						<th>留言时间</th>
						<th width="50">状态</th>
						<th width="50">操作</th>
					</tr>
				</thead>
				<tbody>
				<?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
					<tr>
						<td><?php echo $v['id']; ?></td>
						<td><?php echo $v['content']; ?></td>
						<td><?=date('Y-m-d H:i:s',$v['add_time'])?></td>
						<td>
							<span style="cursor: pointer" data-id="<?php echo $v['id']; ?>" data-table="lyb" data-status="<?php echo $v['status']; ?>" class="js_status label label-<?php echo !empty($v['status']) && $v['status']==1?'success':'default'; ?>"><?php echo !empty($v['status']) && $v['status']==1?'正常':'冻结'; ?></span>
						</td>
						<td>
							<a class="btn btn-danger js_del" data-table="lyb" data-id="<?php echo $v['id']; ?>" href="#this">
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

<SCRIPT Language=VBScript><!--

//--></SCRIPT>