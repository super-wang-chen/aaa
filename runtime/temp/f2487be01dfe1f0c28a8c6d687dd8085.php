<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"D:\freehostnew\canadalotter\web\public/../application/admin\view\index\cate_list.html";i:1509589300;}*/ ?>
<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h2><i class="fa fa-table red"></i><span class="break"></span><strong>栏目列表</strong></h2>
			<div class="panel-actions">
				<a href="<?=url('cate_list')?>" class="btn-setting js_get_a"><i class="fa fa-rotate-right"></i></a>
			</div>
		</div>
		<?php
			$type=config('type_string');
		?>
		<div class="panel-body">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
				<thead>
					<tr>
						<th width="30">ID</th>
						<th>名称</th>
						<th>类型</th>
						<th>排序</th>
						<th>导航</th>
						<th>状态</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
					
				<?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
					<tr>
						<td><?php echo $v['id']; ?></td>
						<td><?php echo $v['title']; ?></td>
						<td><?php echo $type[$v['link']]; ?></td>
						<td><?php echo $v['sort']; ?></td>
						<td>
							<span style="cursor: pointer" data-id="<?php echo $v['id']; ?>" data-key="show_nav" data-table="category" data-status="<?php echo $v['show_nav']; ?>" class="js_status label label-<?php echo !empty($v['show_nav']) && $v['show_nav']==1?'success':'default'; ?>"><?php echo !empty($v['show_nav']) && $v['show_nav']==1?'显示':'冻结'; ?></span>
						</td>
						<td>
							<span style="cursor: pointer" data-id="<?php echo $v['id']; ?>" data-table="category" data-status="<?php echo $v['status']; ?>" class="js_status label label-<?php echo !empty($v['status']) && $v['status']==1?'success':'default'; ?>"><?php echo !empty($v['status']) && $v['status']==1?'正常':'冻结'; ?></span>
						</td>
						<td>
							<a class="btn btn-info" href="<?=url('add_cate',array('id'=>$v['id']))?>">
								<i class="fa fa-edit "></i>
							</a>
							<a class="btn btn-danger js_del" data-table="category" data-id="<?php echo $v['id']; ?>" href="#this">
								<i class="fa <?php echo !empty($v['lock']) && $v['lock']==1?'fa-lock':'fa-trash-o'; ?> "></i>
							</a>
						</td>
					</tr>
					<?php if(isset($v['_child'])): if(is_array($v["_child"]) || $v["_child"] instanceof \think\Collection): $i = 0; $__LIST__ = $v["_child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vc): $mod = ($i % 2 );++$i;?>
						<tr>
							<td><?php echo $vc['id']; ?></td>
							<td> - - <?php echo $vc['title']; ?></td>
							<td><?php echo $type[$vc['link']]; ?></td>
							<td><?php echo $vc['sort']; ?></td>
							<td>
								<span style="cursor: pointer" data-id="<?php echo $vc['id']; ?>" data-key="show_nav" data-table="category" data-status="<?php echo $vc['show_nav']; ?>" class="js_status label label-<?php echo !empty($vc['show_nav']) && $vc['show_nav']==1?'success':'default'; ?>"><?php echo !empty($vc['show_nav']) && $vc['show_nav']==1?'显示':'冻结'; ?></span>
							</td>
							<td>
								<span style="cursor: pointer" data-id="<?php echo $vc['id']; ?>" data-table="category" data-status="<?php echo $vc['status']; ?>" class="js_status label label-<?php echo !empty($vc['status']) && $vc['status']==1?'success':'default'; ?>"><?php echo !empty($vc['status']) && $vc['status']==1?'正常':'冻结'; ?></span>
							</td>
							<td>
								<a class="btn btn-info" href="<?=url('add_cate',array('id'=>$vc['id']))?>">
									<i class="fa fa-edit "></i>
								</a>
								<a class="btn btn-danger js_del" data-table="category" data-id="<?php echo $vc['id']; ?>" href="#this">
									<i class="fa <?php echo !empty($vc['lock']) && $vc['lock']==1?'fa-lock':'fa-trash-o'; ?> "></i>
								</a>
							</td>
						</tr>
						<?php if(isset($vc['_child'])): if(is_array($vc["_child"]) || $vc["_child"] instanceof \think\Collection): $i = 0; $__LIST__ = $vc["_child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vca): $mod = ($i % 2 );++$i;?>
							<tr>
								<td><?php echo $vca['id']; ?></td>
								<td> - - - <?php echo $vca['title']; ?></td>
								<td><?php echo $type[$vca['link']]; ?></td>
								<td><?php echo $vca['sort']; ?></td>
								<td>
									<span style="cursor: pointer" data-id="<?php echo $vca['id']; ?>" data-key="show_nav" data-table="category" data-status="<?php echo $vca['show_nav']; ?>" class="js_status label label-<?php echo !empty($vca['show_nav']) && $vca['show_nav']==1?'success':'default'; ?>"><?php echo !empty($vca['show_nav']) && $vca['show_nav']==1?'显示':'冻结'; ?></span>
								</td>
								<td>
									<span style="cursor: pointer" data-id="<?php echo $vca['id']; ?>" data-table="category" data-status="<?php echo $vca['status']; ?>" class="js_status label label-<?php echo !empty($vca['status']) && $vca['status']==1?'success':'default'; ?>"><?php echo !empty($vca['status']) && $vca['status']==1?'正常':'冻结'; ?></span>
								</td>
								<td>
									<a class="btn btn-info" href="<?=url('add_cate',array('id'=>$vca['id']))?>">
										<i class="fa fa-edit "></i>
									</a>
									<a class="btn btn-danger js_del" data-table="category" data-id="<?php echo $vca['id']; ?>" href="#this">
										<i class="fa <?php echo !empty($vca['lock']) && $vca['lock']==1?'fa-lock':'fa-trash-o'; ?> "></i>
									</a>
								</td>
							</tr>
							<?php if(isset($vca['_child'])): if(is_array($vca["_child"]) || $vca["_child"] instanceof \think\Collection): $i = 0; $__LIST__ = $vca["_child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vcab): $mod = ($i % 2 );++$i;?>
								<tr>
									<td><?php echo $vcab['id']; ?></td>
									<td> - - - - <?php echo $vcab['title']; ?></td>
									<td><?php echo $type[$vcab['link']]; ?></td>
									<td><?php echo $vcab['sort']; ?></td>
									<td>
										<span style="cursor: pointer" data-id="<?php echo $vcab['id']; ?>" data-key="show_nav" data-table="category" data-status="<?php echo $vcab['show_nav']; ?>" class="js_status label label-<?php echo !empty($vcab['show_nav']) && $vcab['show_nav']==1?'success':'default'; ?>"><?php echo !empty($vcab['show_nav']) && $vcab['show_nav']==1?'显示':'冻结'; ?></span>
									</td>
									<td>
										<span style="cursor: pointer" data-id="<?php echo $vcab['id']; ?>" data-table="category" data-status="<?php echo $vcab['status']; ?>" class="js_status label label-<?php echo !empty($vcab['status']) && $vcab['status']==1?'success':'default'; ?>"><?php echo !empty($vcab['status']) && $vcab['status']==1?'正常':'冻结'; ?></span>
									</td>
									<td>
										<a class="btn btn-info" href="<?=url('add_cate',array('id'=>$vcab['id']))?>">
											<i class="fa fa-edit "></i>
										</a>
										<a class="btn btn-danger js_del" data-table="category" data-id="<?php echo $vcab['id']; ?>" href="#this">
											<i class="fa <?php echo !empty($vcab['lock']) && $vcab['lock']==1?'fa-lock':'fa-trash-o'; ?> "></i>
										</a>
									</td>
								</tr>
							<?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
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
</script>