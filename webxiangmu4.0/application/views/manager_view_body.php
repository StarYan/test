<!--显示信息的主体-->
<div class="row">
	<div class="col-md-12">
		<div class="box box-magenta">
			<div class="box-title">
				<h3><i class="icon-table"></i><?php echo $tittle?></h3>
				<div class="box-tool">
					<a data-action="collapse" href="#"></a>
				</div>
			</div>
			<div class="box-content">
				<table class="table table-striped table-hover fill-head">
					<thead>
					<tr>
						<th style="width:30%;">流水号</th>
						<th style="width:30%;">姓名</th>
						<th style="width:30%;">操作</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach($list as $item):?>
						<tr>
							<td><?=$item['user_num']?></td><td><?=$item['user_name']?></td><td><a class="btn btn-magenta btn-sm" href="<?php echo $href.'/'.$item['user_num']?>"><i class="icon-eye-open"></i>&nbsp;&nbsp;<?=$act?></a></td>
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