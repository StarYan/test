<!--显示信息的主体-->
<div class="row">
	<div class="col-md-12">
		<div class="box box-blue">
			<div class="box-title">
				<h3><i class="icon-table"></i>管理员：<?php echo $dataAdmin->username?></h3>
				<div class="box-tool">
					<a data-action="collapse" href="#"></a>
				</div>
			</div>
			<div class="box-content">
				<table class="table table-striped table-hover fill-head">
					<thead>
					<tr>
						<th style="width:30%;">#ID</th>
						<th style="width:30%;">姓名</th>
						<th style="width:30%;">操作</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach($dataUser as $user):?>
						<tr>
							<td><?=$user->id?></td><td><?=$user->name?></td><td><a class="btn btn-primary btn-sm" href="<?php echo $href.'/'.$user->id?>"><?=$act?></a></td>
						</tr>
					<?php endforeach;?>
					</tbody>
				</table>
				<div class="text-center">
					<?php echo $link;?>
				</div>
			</div>
		</div>
	</div>
</div>
<!--显示信息的主体-->