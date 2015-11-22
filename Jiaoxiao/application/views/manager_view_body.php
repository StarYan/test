<!--显示信息的主体-->
		<div class="container">
			<div class="jumbotron">
				<!--没有被审核的名单-->
						<h1 class="text-center"><?php echo $tittle?></h1>
						<!--要显示的信息-->
						<div class="table-responsive">
						  	<table class="table table-bordered table-hover" id="weishenhe">
						  		<tr>
						  			<td>流水号</td><td>姓名</td><td>操作</td>
						  		</tr>
						  		<?php foreach($list as $item):?>
						  			<tr>
						  				<td><?=$item['user_num']?></td><td><?=$item['user_name']?></td><td><a href="<?php echo $href.'/'.$item['user_num']?>"><?=$act?></a></td>
						  			</tr>
						  		<?php endforeach;?>
						  		
						  	</table>
						</div>
				
				<!--要显示的信息-->
				<?php echo @$link ?>
				
			</div>
		</div>
