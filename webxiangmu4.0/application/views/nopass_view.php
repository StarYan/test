		<!--显示信息的主体-->
		<div class="row">
			<div class="col-md-12">
				<div class="box box-magenta">
					<div class="box-title">
						<h3><i class="icon-table"></i> 详细的错误信息(流水号:<?=$list[0]->user_num ?> &nbsp;&nbsp;&nbsp;姓名:<?=$list[0]->user_name ?>)</h3>
						<div class="box-tool">
							<a class="btn btn-magenta" href="<?php echo site_url('manager_controller/Nopass') ?>"><li class="icon-reply"></li></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-bordered">
							<thead>
							<tr>
								<th>错误的标题</th>
								<th>错误的内容</th>
								<th>错误的原因</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach($list as $item):?>
								<tr>
									<td><?=$item->tittle?></td><td><?=$item->value?></td><td><?=$item->wrongreason?></td>
								</tr>
							<?php endforeach;?>
							</tbody>
							<h2 class="text-center">审核人：<?=$managerInfo[0]->managername ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;审核时间：<?=$managerInfo[0]->checktime ?></h2>
						</table>
					</div>
				</div>
			</div>
		</div>
			<!--显示信息的主体-->